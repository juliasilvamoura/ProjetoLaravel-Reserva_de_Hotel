<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'id_reserva','data_chegada','data_saida',

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function clientes(){
        return $this->belongsTo('App\Model\Cliente','cliente_id');
    }


    public function pagamentos(){
        return $this->belongsTo('App\Model\Pagamento','pagamento_id');
    }


    public function quartos(){
        return $this->belongsTo('App\Model\Quarto','quarto_id');
    }


    public function search($filter = null)
    {

        $results = $this->where(function($query) use($filter){
            if ($filter)
            { 
                $query->where('id_reserva','LIKE', "%($filter)%");
            }


        })->paginate(10);

        return $results;

        

    }
}
