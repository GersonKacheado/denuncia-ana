<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador do Sistema',
            'idade' => 40,
            'contato' => '096XXXXXXXXX',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('admin123'),
            'status' => 'administrador'
        ]);
    }
}
