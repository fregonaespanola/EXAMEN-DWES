<?php
    class Usuario {
        public $nombre;
        const NUM_PROMOCION = 6;

        function getRachaPromocion():int{
            return Usuario::NUM_PROMOCION;
        }

        function __toString():string{
            return "Soy ".get_class($this).": $this->nombre y necesito {$this->getRachaPromocion()} partidos seguidos";
        }
    }

    class UsuarioPremium extends Usuario{
        const NUM_PROMOCION = 3;
        
        function getRachaPromocion():int{
            return UsuarioPremium::NUM_PROMOCION;
        }
    }


    $j=new Usuario();
    $j->nombre = "Paco";
    echo $j."\n";

    $j=new UsuarioPremium();
    $j->nombre = "Laura";
    echo $j."\n";
?>