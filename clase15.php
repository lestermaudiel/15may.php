<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Tecnologia{
    private static $obtenerComputadora = "DATOS TECNOLOGICOS";
    public $nombres;
    protected $memoria;
    public $pantalla;

    public function __construct($nombres, $memoria, $pantalla){
        $this->nombres = $nombres;
        $this->memoria = $memoria;
        $this->pantalla = $pantalla;
    }
    final public static function obtenerComputadora(){
        echo self::$obtenerComputadora;
    }
    public function nombre(): void{
        echo " El marca del telefono: $this->nombres";
    }
    
    public function getMemoria() : void{
        echo "La Memoria es de: $this->memoria";
    }

    public function setMemoria(string $memoria){
        $this->memoria = $memoria;
    }

    public function getPantalla(): void{
        echo "El tipo de Pantalla es de: $this->pantalla";
    }
}

class Telefono extends Tecnologia{
    public $camara;

    public function __construct($nombres = " ", $memoria = " ", $pantalla = " ", $camara = " ") {
        parent::__construct($nombres, $memoria, $pantalla);
        $this->camara = $camara;
    }
    public function getcamara() : void{
        echo"La cantidad de megapixeles de la camara es : $this->camara";
    }
    public function nombre(): void{
        echo " La marca del telefono es: $this->nombres";
    } 
}
class Reloj extends Tecnologia{
    public $tamaño;

    public function __construct($nombres = " ", $memoria = " ", $pantalla = " ", $tamaño = " ") {
        parent::__construct($nombres, $memoria, $pantalla);
        $this->tamaño = $tamaño;
    }

    public function getTamaño() : void{
        echo"El tamaño del dispositivo es: $this->tamaño";
    }

    public function reloj(): void{
        echo " El tipo del Reloj es: $this->nombres";
    }
 
}
$Tecnologia1 = new Telefono('Samsung S-23 Ultra', '1 Tb, 16 RAM', 16,'17 centrimetros');
$Tecnologia1 ->obtenerComputadora();
echo "<br>";
$Tecnologia1 ->nombre();
echo "<br>";
$Tecnologia1 ->getMemoria();
echo "<br>";
$Tecnologia1 ->getPantalla();
echo "<br>";
$Tecnologia1 ->getcamara();

echo"<BR>";
echo"<BR>";
echo"<BR>";

$reloj1 = new Reloj('Smart Watch', '1 GB', 4, '3.5 mm');
$reloj1->obtenerComputadora();
echo "<br>";
$reloj1->nombre();
echo "<br>";
$reloj1->getMemoria();
echo "<br>";
$reloj1->getPantalla();
echo "<br>";
$reloj1->getTamaño();
