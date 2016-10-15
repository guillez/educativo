<?php
namespace Educativo\Repositories\Ciudad;

use Educativo\Ciudad;

class CiudadRepository
{

    public function getAllCiudades()
    {
        return Ciudad::all();
    }

    public function find($id)
    {
        return Ciudad::findOrFail($id);
    }

    public function listAllCiudades()
    {
        return Ciudad::lists('nombre', 'id');
    }

    public function create($requestData)
    {
        Ciudad::create($requestData->all());
    }

    public function destroy($id)
    {
        Ciudad::findorFail($id)->delete();
    }

    public function update($id, $requestData)
    {
        $banco = Ciudad::findOrFail($id);
        $banco->fill($requestData->all())->save();
    }
}
