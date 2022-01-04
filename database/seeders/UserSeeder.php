<?php

namespace Database\Seeders;

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
        $user = new User;
        $user->name = 'sarev17';
        $user->password = 'sareverdna';
        $user->nivel = 'administrador';
        $user->validade = '2100-01-01';
        $user->save();

        $juros = new Juros;
        $juros->user_id = 1;
        $juros->taxa = 0.03;
        $juros->forma = 'VLT';
        $juros->save();

    }
}
