<?php

namespace App\models;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'nome','cpf','telefone','endereco', 'bairro', 'numero', 'cidade', 'estado',

    ];

    public function search($filter = null)
    {

        $results = $this->where(function($query) use($filter){
            if ($filter)
            { 
                $query->where('nome','LIKE', "%($filter)%");
            }


        })->paginate(10);

        return $results;

        

    }
}
