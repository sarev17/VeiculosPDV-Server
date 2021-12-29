<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function index(Request $r)
    {
        
        $erro = '';
        if($r->get('erro')==1){
            $erro = 'Dados inválidos';
        }
        return view('telas.login',['erro'=>$erro]);
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

        if(isset($usuario)){
            return view('telas.principal');
        }else{
            return redirect()->route('login',['erro'=>1]);
        }

    }
}
