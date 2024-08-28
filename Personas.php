<?php
class Persona {
    public $nombre, $cedula, $direccion, $telefono;


    public function __construct ($nombre, $cedula, $direccion, $telefono){


        $this->nombre=$nombre;
        $this->cedula=$cedula;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
    }


    public function __toString (){
        $salida="Nombre: " . $this->nombre  .
        "<br>Cedula: " . $this->cedula .
        "<br>Dirección: " . $this->direccion .
        "<br>Telefono: " . $this->telefono;




       
        return $salida;
    }


                       
}
echo "Persona";
$per = new Persona("Pedro", "12345", "calle 1", "3012323213");
echo $per;
echo "<br> <br> ";




class Estudiante extends Persona{
    public $codigo, $carrera;


    public function __construct($nombre, $cedula, $direccion, $telefono, $codigo, $carrera){
       
        parent::__construct($nombre, $cedula, $direccion, $telefono);


        $this->codigo=$codigo;
        $this->carrera=$carrera;
       
    }


    public function __toString(){
        $salida=parent::__toString();


        $salida .= "<br> Código: " . $this->codigo .
        "<br> Carrera" . $this->carrera; ;


        return $salida;
    }
}


echo "Estudiante";
$est = new Estudiante("Juan", "5678", "calle 3", "3103243233", "7777", "Sistemas");
echo $est;
echo "<br><br>";




class Profesor extends Persona{
    public $asignatura, $horas;


    public function __construct($nombre, $cedula, $direccion, $telefono, $asignatura, $horas){
       
        parent::__construct($nombre, $cedula, $direccion, $telefono);


        $this->asignatura=$asignatura;
        $this->horas=$horas;
       
    }


    public function __toString(){
        $salida=parent::__toString();


        $salida .= "<br> Asignatura : " . $this->asignatura .
        "<br> Horas" . $this->horas; ;


        return $salida;
    }
}


echo "Profesor";
$prof = new Profesor("Andres", "9876", "calle 5", "301534222", "Estructura de datos", "8 horas semanales");
echo $prof;






?>
