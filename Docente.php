<?php

namespace App\Models\Tarea14;
use App\Models\Tarea14\Persona;

class Docente extends Persona
{
    private $grado;
    private $titulo;

    public function __construct($nombres,$apellidos,$dni,$fechaNacimiento,$grado,$titulo)
    {
        parent ::__construct($nombres,$apellidos,$dni,$fechaNacimiento);

        $this->grado = $grado;
        
        $this->titulo = $titulo;
    }

    public function getGrado()
    {
        return $this->grado;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function calcularEdad()
    {
       $fechaActual= date('Y-m-d');

       $fechaNacimiento = $fechaActual - $this->fechaNacimiento;

       return $fechaNacimiento;
    }
}