<?php

namespace Educativo;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = [
            'nombre',
            'fk_pais_id'];


    public function pais()
    {
        return $this->hasOne('Educativo\Pais');
    }      

    public static function provincias($id){
    	return Provincia::where('fk_pais_id','=',$id)
    	->get();
    }  
}
