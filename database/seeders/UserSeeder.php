<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usuarios = [
            [
                "name" => "Admin",
                "email" => "admin1@gmail.com",
                "password" => "password"
            ],
            [
                "name" => "Cliente",
                "email" => "cliente1@gmail.com",
                "password" => "password"
            ]
        ];
        
        foreach($usuarios as $usuario)
        {
            User::create([
                "name" => $usuario["name"],
                "email" => $usuario["email"],
                "password" => $usuario["password"]
            ]);
        }
    }
}
