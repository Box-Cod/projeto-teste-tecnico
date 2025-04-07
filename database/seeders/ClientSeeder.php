<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Client::factory(5)->create();

        // Client::create([
        //     'name' => 'Usário Teste',
        //     'cpf' => '11122233344',
        //     'cnpj',
        //     'phone' => '44911112222',
        //     'email' => 'teste@email.com'
        // ]);
    }
}
