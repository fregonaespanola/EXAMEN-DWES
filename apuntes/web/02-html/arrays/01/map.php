<?php
function tablinaSinBucle(array $frutas,array $precios):string{
    $array = array_map(null, $frutas, $precios);
    $html= array_reduce($array, function($anterior, $actual){

        return $anterior."<tr><td>".$actual[0]."</td><td> ".$actual[1]."€</td></tr>";
    }, "<table>");
    $html.="</table>";
    return $html;
}

$frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
 $precios = [1.2, 0.8, 1.0, 2.5];
 echo tablinaSinBucle($frutas, $precios);

?>