<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\Juros;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'sarev17';
        $admin->password = '1029384756';
        $admin->nivel = 'administrador';
        $admin->validade = '2030-01-01';
        $admin->save();

        $juros = new Juros;
        $juros->user_id = 1;
        $juros->taxa = 0.03;
        $juros->forma = 'VLT';
        $juros->save();

        $user_test = new User;
        $user_test->name = 'teste';
        $user_test->password = '123';
        $user_test->nivel = 'gerente';
        $user_test->validade = '2030-01-01';
        $user_test->save();

        $juros2 = new Juros;
        $juros2->user_id = 2;
        $juros2->taxa = 0.03;
        $juros2->forma = 'VLT';
        $juros2->save();

        $info = new Info;
        $info->nome = 'Caju e Cia';
        $info->user_id = 2;
        $info->cpf = '87698282727276';
        $info->cep = '62500-001';
        $info->rua = 'Joao Tabosa Braga';
        $info->bairro = 'Assunção';
        $info->numero = '9';
        $info->cidade = 'Itapipoca';
        $info->estado = 'Ceará';
        $info->save();
    }
}
