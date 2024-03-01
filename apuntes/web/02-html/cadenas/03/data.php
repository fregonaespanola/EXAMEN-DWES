<?php

function arrayEtiq(...$param): string   {
    $etiqueta="";
    $codi="";
    for($i=0; $i<count($param); $i++){
        if($i==0){
            $etiqueta=$param[$i];
        }else{
            $codi.="<$etiqueta>$param[$i]</$etiqueta>";
        }
    }

    return $codi;
}

/*Escribe una función concatenarPalabras que tome una serie de palabras 
como argumentos y las concatene en una sola cadena separada por espacios.*/

function concatenarPalabras(string ...$param): string {
    $concat="";
    foreach($param as $p){
        $concat.= "$p ";
    }
    return $concat;
}

/*Escribe una función concatenaCon. Recibe un primer paŕametro la cadena 
con la que concatenar y una lista variable de parámetros. Devuelve la cadena
concatenada. Por defecto se concatena con " ".*/

function concatenaCon(string &$concat, string ...$param){
    $concat.=" ";
    foreach($param as $p){
        $concat.= "$p ";
    }
}

/*Declara una función anónima que acepte dos números y 
los multiplique. Invócala con el número 3 y 4*/

$multiplicar = function($num1, $num2) {
    return $num1 * $num2;
};
$resultado = $multiplicar(3, 4);

/*Implementa una función llamada aplicarOperacion que tome una función 
de operación y 2 números. Devuelva el resultado de aplicar la operación
 a esos números. Define las funciones suma, resta y multiplicación.*/

function aplicarOperacion(string $operacion, int $num1, int $num2){
    $callback= "$operacion";
    return $callback($num1, $num2);
}
function suma($a, $b){
 return $a+$b;
}
function resta($a, $b){
    return $a-$b;
   }
   function multiplicacion($a, $b){
    return $a*$b;
   }

/*Crea una función que reciba una cadena y la modifique invirtiéndola.*/
function invert(string &$cadena){
    $cadena = strrev($cadena);
}
/*Crea una función que reciba una variable acumulador y un
 array de enteros. Cambairá el valor de la primera variable con 
 la sum*/

 function camSuma(int &$acum, int ...$param){
    foreach($param as $p){
        $acum+=$p;
    }
 }

 /*Crea una versiónde la anterior función para que reciba 
 una lista varibales de parámetros.*/
 function versionado2(int &$acum, mixed ...$param){
    foreach($param as $p){
        $acum+=$p;
    }
 }

/*Crea una función combinada de las dos anteriores que le 
dé igual lo que reciba.*/
function versionado3(int &$acum, ...$param) {
    foreach ($param as $p) {
        if (is_numeric($p)) {
            $acum += $p;
        }
    }
}
/*Crea una función que reciba una función como primer parámetro
 y después un número variable de números. La primera función debe
  devolver un valor boolean, es una función de filtro. La función 
  devolverá un array con los valores que han pasado el filtro:*/

$impar = function($num) {
    if(($num%2)==0){
        return false;
    }else{
        return true;
    }
};
function filtra_array_impares($fun, int ...$param) {
    $array=[];
    $i=0;
    if($fun==true){
    foreach ($param as $p) {
        if (($p%2)!=0) {
            $array[$i]=$p;
            $i++;
        }
        } 
    }else{
        foreach ($param as $p) {
            if (($p%2)==0) {
                $array[$i]=$p;
                $i++;
            }
            }
    }
    return $array;
}
function filtra_array($fun, int ...$param) {
    $array=[];
    $i=0;
    if($fun==true){
    foreach ($param as $p) {
        if (($p%2)!=0) {
            $array[$i]=$p;
            $i++;
        }
        }
        
    }elseif($fun=="primos"){
        foreach ($param as $p) {
        for ($x = 2; $x * $x <= $p; $x++) {
            if ($p % $x === 0) {
                $array[$i]=$p;
                $i++;
            }
        }
    }
    }
    return $array;
    
}
/*Crea la función esPrimo y utiliza 
la función anterior para hacer un filtrado.*/

$esPrimo = function($numero) {
     for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            return false;
        }
    }
    return true;
};

function filtra_array_primos($fun, int ...$param) {
    $array=[];
    $i=0;
    if($fun==true){ //primos
        foreach ($param as $p) {
            $cnt=0;
            for ($x = 2; $x < $p; $x++) {
                if ($p % $x == 0) {
                    $cnt++;
                }
            }
            if($cnt==0){
                $array[$i]=$p;
                $i++;
            }
        }
    }else{ //no primos
        foreach ($param as $p) {
            $cnt=0;
            for ($x = 2; $x < $p; $x++) {
                if ($p % $x == 0) {
                    $cnt++;
                }
            }
            if($cnt!=0){
                $array[$i]=$p;
                $i++;
            }
        }
    }
    return $array;
}

/*Crea una función al_cubo_array que reciba un array de
 enteros y lo modifique elevándolos al cubo.*/

 function cubea(int ...$param){
    $array=[];
    foreach ($param as $k => $p) {
        $array[$k] = pow($p,3);
    }
    return $array;
 }
?>