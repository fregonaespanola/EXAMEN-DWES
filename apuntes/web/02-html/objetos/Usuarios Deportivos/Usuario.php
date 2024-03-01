<?php
const PARTIDOS_PARA_SUBIR_NIVEL = 6;
const PARTIDOS_PARA_SUBIR_NIVEL_PREMIUM = 3;

class Usuario {
    private $nombre;
    private $apellidos;
    private $deporte;
    private $nivel;
    private $historico = [];
    
    public function __construct($nombre, $apellidos, $deporte) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->deporte = $deporte;
        $this->nivel = 0;
    }
    
    public function introducirResultado($resultado) {
        $this->historico[] = $resultado;
        $this->actualizarNivel();
    }
    
    private function actualizarNivel() {
        $count = count($this->historico);
        $this->nivel = floor($count / PARTIDOS_PARA_SUBIR_NIVEL);
        
        if ($this->nivel > 6) {
            $this->nivel = 6;
        }
        
        if ($this->nivel > 0 && $count % PARTIDOS_PARA_SUBIR_NIVEL == 0) {
            echo "{$this->nombre} ha subido de nivel a {$this->nivel}\n";
        } elseif ($this->nivel < 6 && $count % PARTIDOS_PARA_SUBIR_NIVEL == 0) {
            echo "{$this->nombre} ha bajado de nivel a {$this->nivel}\n";
        }
    }
    
    public function imprimirInformacion() {
        echo '<p style="color: blue">';
        echo "{$this->nombre} {$this->apellidos} ({$this->deporte})";
        echo '<ul>';
        foreach ($this->historico as $resultado) {
            echo "<li>{$resultado}</li>";
        }
        echo '</ul></p>';
    }
}

class UsuarioPremium extends Usuario {
    public function introducirResultado($resultado) {
        parent::introducirResultado($resultado);
    }
}

class Administrador extends UsuarioPremium {
    public function crearPartido() {
        echo "Partido creado\n";
    }
}
?>