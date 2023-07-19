<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $usuario1 = [
            'nome' => 'Casimiro Custódio',
            'email' => 'usuario1@gmail.com',
            'telefone' => '19981633835',
            'endereco' => 'Rio Janeiro',
            'password' => Hash::make('123456')
        ];

        User::create($usuario1);

        $usuario2 = [
            'nome' => 'Custódio Gundja',
            'email' => 'usuario2@gmail.com',
            'telefone' => '29981633835',
            'endereco' => 'Belo Horizonte',
            'password' => Hash::make('123456')
        ];

        User::create($usuario2);

        // \App\Models\User::factory(10)->create();
    }
}
