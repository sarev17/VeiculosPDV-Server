<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['autenticacao:padrao,administrador'])->prefix('/acesso')->group(function () {

    Route::get('/', [LoginController::class, 'principal'])->name('principal');

    Route::resource('veiculos', ProdutoController::class);

    Route::post('venda_confirmar', function () {
        return view('telas.Venda_confirmar');
    })->name('venda_confirmar');
    Route::get('cadastrar', function () {
        return view('telas.Cadastrar');
    })->name('cadastrar');
    Route::get('vender', function () {
        return view('telas.Vender');
    })->name('vender');
    Route::match(['get', 'post'], 'vender_dados_cliente', function () {
        return view('telas.Vender_Dados_Cliente', ['dados' => $_POST]);
    })->name('vender2');
    Route::post('busca_placa', function () {
        return view('func.busca_placa');
    });
    Route::post('busca_veiculo', function () {
        return view('func.preenche_veiculo');
    });
    Route::post('total_venda', function () {
        return view('func.total_venda');
    });
    Route::post('busca_cliente', function () {
        return view('func.busca_cliente');
    });
    Route::post('venda', [VendaController::class, 'store'])->name('venda.salvar');
    Route::post('pagar', [PagamentoController::class, 'store'])->name('pagamento.salvar');
    Route::get('teste', function () {
        return view('telas.pix');
    });
    Route::get('pagamento', function () {
        return view('telas.Pagamento');
    })->name('pagamento');
    Route::post('ajax', function () {
        return view('func.ajax');
    });
    Route::get('dado', function () {
        return view('telas.Resultados');
    })->name('dado');
    Route::prefix('dados')->group(function () {
        Route::get('estoque', function () {
            return view('telas.dados.estoque');
        })->name('estoque');
        Route::get('vendas', [VendaController::class, 'listar'])->name('vendas');
        Route::get('entradas', [PagamentoController::class, 'listar'])->name('entradas');
        Route::get('entradas/date', [PagamentoController::class, 'date'])->name('entradas.date');

        Route::middleware(['admin'])->prefix('/admin')->group(function () {
            Route::resource('usuarios',UserController::class);
            Route::get('usuarios.ban',[UserController::class,'ban'])->name('usuarios.ban');
        });        
        Route::get('editar_veiculo', function () {
            return view('telas.editar_veiculo');
        })->name('editar_veiculo');
    });
    Route::prefix('PDF')->group(function () {
        Route::get('diaE', [PDFController::class, 'diaE'])->name('pdf.diaE');
        Route::get('MesE', [PDFController::class, 'mesE'])->name('pdf.mesE');
        Route::get('contrato/{id_venda}', [PDFController::class, 'contrato'])->name('pdf.contrato');
        Route::get('segundaE/{id_pagamento}', [PDFController::class, 'segunda_via_entrada'])->name('pdf.segundaE');
    });

    Route::get('pix', function () {
        return view('telas.pix');
    })->name('pix');;

    Route::post('info', [LoginController::class, 'info'])->name('info');
    Route::post('juros', [LoginController::class, 'juros'])->name('juros');
    Route::post('novo_user', [LoginController::class, 'novo_user'])->name('novo_user');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

});

Route::get('qr_pagamento/{id}', [PagamentoController::class, 'busca_qr']);
Route::get('login/{erro?}', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'autenticar'])->name('login_autenticar');
Route::get('/', [LoginController::class, 'index']);