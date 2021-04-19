<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamentos';

    protected $fillable = [
        'id_pagamento','valor','data',

    ];




    protected $hidden = [
        'created_at',
        'updated_at',
    ];



    public function Reservas(){
        return $this->hasMany('App\Model\Reserva','pagamento_id');
    }



    
    public function search($filter = null)
    {

        $results = $this->where(function($query) use($filter){
            if ($filter)
            { 
                $query->where('id_pagamento','LIKE', "%($filter)%");
            }


        })->paginate(10);

        return $results;

        

    }
}
