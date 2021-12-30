<?php

namespace App\Http\Controllers;

use App\Models\Juros;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{

    public function principal(Request $request)
    {
        return view('telas.principal');
    }

    public function index(Request $r)
    {  
        $erro = '';
        if($r->get('erro')==1){
            $erro = 'DADOS INVÁLIDOS!';
        }
        if($r->get('erro')==2){
            $erro = 'LOGIN NECESSÁRIO';
        }
        return view('telas.login',['erro'=>$erro]);
    }

    public function logout(){
        session_destroy();
        return redirect()->route('login');
    }

    public function autenticar(Request $r)
    {
        //regras
        $regras = [
            'name' => 'required',
            'password'=>'required'
        ];

        //feedback
        $feedback = [
            'name.required'=> 'Usuário é obrigatório',
            'name.required'=> 'Senha é obrigatória',
        ];
        $r->validate($regras,$feedback);
        
        $name = $r->get('name');
        $password = $r->get('password');
        $usuario = User::where('name',$name)->where('password',$password)->get()->first();
        $juros = Juros::where('user_id',$usuario->id)->get()->first();
            
        

        if(isset($usuario)){
            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['nivel'] = $usuario->nivel;
            $_SESSION['id'] = $usuario->id;
            $_SESSION['validade'] = $usuario->validade;
            $_SESSION['taxa_juros'] = $juros->taxa;
            $_SESSION['forma_juros'] = $juros->forma;
            
            return redirect()->route('principal');
        }else{
            return redirect()->route('login',['erro'=>1]);
        }
        
    }

    public function juros(Request $r)
    {
        $juros = doubleval($r->taxaJuros)/100;
        $forma = $r->formaJuros;
        
        Juros::where('user_id',$_SESSION['id'])->update(['taxa'=>$juros,'forma'=>$forma]);
        $_SESSION['taxa_juros'] = $juros;
        $_SESSION['forma_juros'] = $forma;
        return redirect()->route('principal');

    }
}
