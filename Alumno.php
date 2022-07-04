<?php

namespace App\Models\Tarea14;
use App\Models\Tarea14\Persona;

class Alumno extends Persona
{
    private $codigo;

    public function __construct($nombres,$apellidos,$dni,$fechaNacimiento,$codigo)
    {
        parent ::__construct($nombres,$apellidos,$dni,$fechaNacimiento);

        $this->codigo = $codigo;
    }


    public function getCodigo()
    {
        return $this->codigo;
    }


    public function calcularEdad()
    {
        $fechaActual = date('Y-m-d');

        $fechaNacimiento =$fechaActual - $this->fechaNacimiento;
        
        return $fechaNacimiento;


    
    }
}