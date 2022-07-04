<?php

namespace App\Models\Tarea14;
abstract class  Persona
{
    protected  $nombres;
    protected  $apellidos;
    protected  $dni;
    protected  $fechaNacimiento;

    public function __construct($nombres,$apellidos,$dni,$fechaNacimiento)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->fechaNacimiento=$fechaNacimiento;
    }

    public function  getNombres() 
        {
            return $this->nombres;
        }
    
    public function getApellidos()
        {

        return $this->apellidos;
        }

    public  function getDni() 
        {
        return $this->dni;
        }

     public function getFechaNacimiento() 
        {
        return $this->fechaNacimiento;
        }  
   
    public abstract function calcularEdad();
    
}