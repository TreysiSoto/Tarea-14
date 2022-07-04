<?php

namespace App\Controllers;

use App\Models\Tarea14\{Docente,Crud};

class DocenteController extends Docente implements Crud
{
    private $control;
    
    public function __construct()
    {
        $this->control = [];
    }

    public function create(Docente $docente)
    {
        $this->control[] = $docente;
    }

    public function mostrar()
    {
        return $this->docente;
    }

    /*public function read();

    public function update($dni);

    public function delete($dni);*/

    
}