<?php
/** Example taken from http://www.webgeekly.com/tutorials/php/how-to-create-a-singleton-class-in-php/ **/
class Config
{
    public $nombre;

    // Hold an instance of the class
    private static $instance;

    // The singleton method
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    private function __construct() {}

}
$config1 = Config::singleton();
$config1->nombre = "Configuración completa";
$config2 = Config::singleton();
$config2->nombre = "Configuración incompleta";
$config3 = Config::singleton();
$config3->nombre = "Configuración inestable";

echo "$config1->nombre - $config2->nombre - $config3->nombre"
?>