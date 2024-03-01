<?php
class Planeta {
    public $nombre;
    public $masa;
    public $diametro;
    public $dsol;

    public function __construct($n = "", $m = -1, $d = -1, $ds = -1) {
        $this->nombre = $n;
        $this->masa = $m;
        $this->diametro = $d;
        $this->dsol = $ds;
    }

    public function mostrarDiv(): void {
        echo "<div>";
        echo "<span>$this->nombre</span><br>";
        echo "<span>$this->masa kg</span><br>";
        echo "<span>$this->diametro km</span><br>";
        echo "<span>$this->dsol km</span>";
        echo "</div>";
    }

    public function save(string $fileName): void {
        $filePath = './storage/' . $fileName;
        $planetas = [];
    
        // Verificar si el archivo existe y cargar su contenido si es el caso
        if (file_exists($filePath)) {
            $planetas = json_decode(file_get_contents($filePath), true);
        }
    
        // Agregar el nuevo planeta al array de planetas
        $planetas[] = [
            'nombre' => $this->nombre,
            'masa' => $this->masa,
            'diametro' => $this->diametro,
            'dsol' => $this->dsol,
        ];
    
        // Guardar el array de planetas en el archivo JSON
        file_put_contents($filePath, json_encode($planetas));
    
        header('Location: index.php');
        exit;
    }

    public function merge($existingObject): void {
        // Implementa la lógica de combinación de datos aquí, si es necesario
        // Por ejemplo, podrías fusionar propiedades de $existingObject con $this
        // Si no se requiere ninguna fusión, puedes dejar esta función vacía.
    }
}
?>