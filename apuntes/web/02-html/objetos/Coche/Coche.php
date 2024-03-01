<?php
class Coche {
    private $matricula;
    private $marca;
    private $carga;

    public function __construct($mat = -1, $marca = '', $carga) {
        $this->matricula = $mat;
        $this->marca = $marca;
        $this->carga = $carga;
    }

    public function pintarInformacion() {
        return "Coche: " . $this->getMatricula() . ", " . $this->getMarca() . " con carga: " . $this->getCarga();
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($mat) {
        $this->matricula = $mat;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getCarga() {
        return $this->carga;
    }

    public function setCarga($carga) {
        $this->carga = $carga;
    }
}

class CocheConRemolque extends Coche {
    private $capacidadRemolque;

    public function __construct($mat = -1, $marca = '', $carga, $capacidadRemolque) {
        parent::__construct($mat, $marca, $carga);
        $this->capacidadRemolque = $capacidadRemolque;
    }

    public function getCapacidadRemolque() {
        return $this->capacidadRemolque;
    }

    public function setCapacidadRemolque($cap) {
        $this->capacidadRemolque = $cap;
    }

    public function pintarInformacion() {
        return "Coche: " . $this->getMatricula() . ", " . $this->getMarca() . " con carga: " . $this->getCarga() . " y remolque de " . $this->capacidadRemolque;
    }
}

class CocheGrua extends Coche{
    private $cocheCargado;

    public function __construct($mat = -1, $marca = '', $carga, $cocheCargado=NULL) {
        parent::__construct($mat, $marca, $carga);
        $this->cocheCargado = $cocheCargado;
    }

    public function cargar(Coche $coche){
        $this->cocheCargado = $coche;
    }

    public function descargar(){
        $this->cocheCargado = NULL;
    }

    public function pintarInformacion(){
        if ($this->cocheCargado == NULL){
            return "Coche: " . $this->getMatricula() . ", " . $this->getMarca() . " con carga: " . $this->getCarga().".No lleva ningún coche";
        } else {
            return "Coche: " . $this->getMatricula() . ", " . $this->getMarca() . " con carga: " . $this->getCarga().". 
            Lleva Coche: " . $this->cocheCargado->getMatricula() . ", " . $this->cocheCargado->getMarca() . " con carga: " . $this->cocheCargado->getCarga();
        }
    }
}
?>