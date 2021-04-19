<?php

namespace App\Model;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    protected $table = 'quartos';

    protected $fillable = [
        'numero_quarto','tipo_quarto',

    ];



    protected $hidden = [
        'created_at',
        'updated_at',
    ];



    public function Reservas(){
        return $this->hasMany('App\Model\Reserva','quarto_id');
    }



    public function search($filter = null)
    {

        $results = $this->where(function($query) use($filter){
            if ($filter)
            { 
                $query->where('numero_quarto','LIKE', "%($filter)%");
            }


        })->paginate(10);

        return $results;

        

    }
}
