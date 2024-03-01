<?php

interface IPersonaje
{
    public function atacar();
    public function defender();
}

class Humano implements IPersonaje
{
    use Posiciones; 

    public function atacar()
    {
        echo "puñetazo\n";
    }

    public function defender()
    {
        echo "bloqueo\n";
    }
}

abstract class Mago implements IPersonaje
{
    use Posiciones;
    
    public function defender()
    {
        echo "Hechizo protector\n";
    }
}

class MagoBlanco extends Mago
{
    public function atacar()
    {
        echo "Ataque de luz\n";
    }
}

class MagoOscuro extends Mago
{
    public function atacar()
    {
        echo "Ataque de sombra\n";
    }
}

class Edificio
{
    private $altura;
    private $descripcion;

    use Posiciones; 
    use GysDesc; 

    public function setAltura(int $altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }
}

class Objeto
{
    private $peso;
    private $descripcion;

    use Posiciones; 
    use GysDesc; 

    public function mostrarPeso()
    {
        echo $this->peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso(int $peso)
    {
        $this->peso = $peso;
    }
}

trait GysDesc
{
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($desc)
    {
        $this->descripcion = $desc;
    }
}

trait Posiciones
{
    private $posX;
    private $posY;
    private $posZ;

    public function getPosX()
    {
        return $this->posX;
    }

    public function setPosX(int $posX)
    {
        $this->posX = $posX;
    }

    public function getPosY()
    {
        return $this->posY;
    }

    public function setPosY(int $posY)
    {
        $this->posY = $posY;
    }

    public function getPosZ()
    {
        return $this->posZ;
    }

    public function setPosZ(int $posZ)
    {
        $this->posZ = $posZ;
    }
}

?>
