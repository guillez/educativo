<?php

namespace Educativo;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $fillable = [
            'nombre',
            'CP',
            'fk_provincia_id'];


    public function provincia()
    {
        return $this->hasOne('Educativo\Provincia');
    }    

    public static function ciudades($id){
    	return Ciudad::where('fk_provincia_id','=',$id)
    	->get();
    }    
}
