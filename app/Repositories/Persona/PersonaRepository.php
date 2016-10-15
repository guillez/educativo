<?php
namespace App\Repositories\Persona;

use App\Persona;

class PersonaRepository
{

    public function getAllPersonas()
    {
        return Persona::all();
    }

    public function find($id)
    {
        return Persona::findOrFail($id);
    }

    public function listAllBancos()
    {
        return Persona::lists('nombre', 'id');
    }

    public function create($requestData)
    {
        Persona::create($requestData->all());
    }

    public function destroy($id)
    {
        Persona::findorFail($id)->delete();
    }

    public function update($id, $requestData)
    {
        $persona = Persona::findOrFail($id);
        $persona->fill($requestData->all())->save();
    }
}
