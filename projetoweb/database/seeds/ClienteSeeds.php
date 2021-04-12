<?php

use Illuminate\Database\Seeder;
use App\Cleinte;
use Carbon\Carbon;
//use App\models\Cliente;

class Cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Cliente $registro)
    {
        $registro->create([
            'nome' => 'Carlos Gomes dos Santos',
            'cpf' => '190.188.330-31',
            'endereco' => 'cidade jardim',
            'telefone' => '(18)-99999-9999',
            'bairro' => 'centro',
            'numero' => '1500',
            'cidade' => 'São Roque',
            'estado' => 'São Paulo',
        ]);
             
    }
}
