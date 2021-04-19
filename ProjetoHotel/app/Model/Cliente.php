<?php

namespace App\Model;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome','cpf','telefone','endereco', 'bairro', 'numero', 'cidade', 'estado',

    ];



    protected $hidden = [
        'created_at',
        'updated_at',
    ];



    public function Reservas(){
        return $this->hasMany('App\Model\Reserva','cliente_id');
    }


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
