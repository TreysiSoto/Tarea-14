<?php

namespace App\Controllers;

use App\Models\Tarea14\{Alumno,Crud};

class AlumnoController extends Alumno implements Crud
{
    private $arreglo;

    public function __construct()
    {
        $this->arreglo = [];
    }

    public function create(Alumno $alumno)
    {
        $this->arreglo[] = $alumno;
    }

    public function mostrar()
    {
        return $this->arreglo;
    }

    /*public function read();

    public function update($dni);

    public function delete($dni);*/

}