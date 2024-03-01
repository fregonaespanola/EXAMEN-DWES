<?php
/* For Loop: 
a) Dado el array $frutas, utiliza un bucle for para
 imprimir cada fruta en una lista numerada. 
 b) Imprime la información en una tabla. 
 c) Imprime la información en una tabla sin usar bucles.*/

 $frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
 $precios = [1.2, 0.8, 1.0, 2.5];

 function numFrutas($array){
    echo "<ol>";
    foreach($array as $k => $f){
        echo "<li>".$f."</li>";
        }
        echo "</ol>";
 }
 function tabFrutas($array, $pre){
    echo "<table>";
    foreach($array as $k => $f){
        echo "<tr>";
        echo "<td>".($k+1)."</td> <td>".$f."</td><td>".$pre[$k]."€</td>";
        echo "</tr>";
        }
    echo "</table>";
 }

 function tabNoBucleFrutas($array, $pre){
    echo "<table>";
        echo "<tr>";
        echo "<td>1</td> <td>".$array[0]."</td><td>".$pre[0]."€</td>";
        echo "</tr><tr>";
        echo "<td>2</td> <td>".$array[1]."</td><td>".$pre[1]."€</td>";
        echo "</tr><tr>";
        echo "<td>3</td> <td>".$array[2]."</td><td>".$pre[2]."€</td>";
        echo "</tr><tr>";
        echo "<td>4</td> <td>".$array[3]."</td><td>".$pre[3]."€</td>";
        echo "</tr>";
    echo "</table>";
}

function tablaSinBucle(array $info):string{
    $html="<ol>";
    $html.= array_reduce($info, function($anterior, $actual){
        return $anterior."<li>$actual</li>";
    }, $html);
    $html.="</ol>";
    return $html;
}


    $alumnos = [
        ["nombre" => "Juan", "edad" => 20, "curso" => "Matemáticas"],
        ["nombre" => "Ana", "edad" => 19, "curso" => "Historia"],
        ["nombre" => "Carlos", "edad" => 21, "curso" => "Inglés"],
    ];

    function noBucleBusca(array $alumnos){
        $html= "<p> El alumno más joven es ";
        $joven = $alumnos[0]["edad"];
        $datos = [$alumnos[0]["nombre"],$alumnos[0]["edad"],$alumnos[0]["curso"]];
        $gDatos = array_reduce($alumnos, function($anterior, $actual){
                if($actual["edad"] < $joven){
                    $joven = $actual["edad"];
                    echo "joven";
                    $datos = [$actual["nombre"],$actual["edad"],$actual["curso"]];
                } return $datos;
        }, null);
        
        print_r($datos);
        print_r($gDatos);
        $html.=$gDatos["nombre"]." de edad ".$gDatos[1]." que cursa ".$gDatos[2]."</p>";
        return $html;

    }

    function alumnoJoven($alumnos){
        $joven=0;
        $alum=0;
        foreach($alumnos as $k => $alumno){
            if($k==0){
                $joven=$alumno["edad"];
                $alum=$k;
            }else if($alumno["edad"] < $joven){
                $joven=$alumno["edad"];
                $alum=$k;
            }
        }
        echo "<p>El alumno más joven es: ".$alumnos[$alum]["nombre"]." de edad ".$alumnos[$alum]["edad"]." años que cursa ".$alumnos[$alum]["curso"]; 
    }


    function noBucleAlumnoJoven($alumnos){
        usort($alumnos, function ($a, $b) {
            return $a["edad"] - $b["edad"];
        });
        echo "<p>El alumno más joven es: ".$alumnos[0]["nombre"]." de edad ".$alumnos[0]["edad"]." años que cursa ".$alumnos[0]["curso"]; 
    }

    function tablaAlumnos($alumnos){
        usort($alumnos, function ($a, $b) {
            return $a["edad"] - $b["edad"];
        });
        echo "<table>";
    foreach($alumnos as $k => $f){
        echo "<tr>";
        echo "<td>".$f["nombre"]." </td> <td>".$f["edad"]." años</td><td>".$f["curso"]."</td>";
        echo "</tr>";
        }
    echo "</table>";
    }
 
 ?>