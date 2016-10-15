<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Persona;
use Session;
use App\Http\Requests\Persona\StorePersonaRequest;
use App\Repositories\Persona\PersonaRepository;

class PersonasController extends Controller
{
    //
     protected $personas;

    public function __construct(PersonaRepository $personas)
    {
        $this->personas = $personas;
    }

        public function index()
    {
        return view('personas.index')
        ->withPersona($this->personas->getAllPersonas());
    }
}
