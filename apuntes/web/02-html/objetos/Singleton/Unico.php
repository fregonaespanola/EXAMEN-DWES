<?php
/** Example taken from http://www.webgeekly.com/tutorials/php/how-to-create-a-singleton-class-in-php/ **/
class Unico
{
    public $cosa;

    // Hold an instance of the class
    private static $instance;

    // The singleton method
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Unico();
        }
        return self::$instance;
    }

    private function __construct() {}

}
$user1 = Unico::singleton();
$user1->cosa = "Hola";
$user2 = Unico::singleton();
$user2->cosa = "k";
$user3 = Unico::singleton();
$user3->cosa = "ase?";

echo "$user1->cosa - $user2->cosa - $user3->cosa"
?>