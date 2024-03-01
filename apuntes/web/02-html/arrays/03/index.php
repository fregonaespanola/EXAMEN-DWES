<?php
$eventos = [
    [
        "nombre" => "Partido de fútbol",
        "fecha" => "2023-10-15",
        "tematica" => "Fútbol",
        "ubicacion" => "Estadio XYZ",
    ],
    [
        "nombre" => "Concierto de MDA",
        "fecha" => "2023-11-20",
        "tematica" => "Música",
        "ubicacion" => "Sala la Paqui",
    ],
    [
        "nombre" => "Conferencia de Emprendimiento",
        "fecha" => "2023-09-25",
        "tematica" => "Educación",
        "ubicacion" => "Ifema",
    ],
];
$hoy = date("Y-m-d");

echo "<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Temática</th>
        <th>Ubicación</th>
    </tr>";

foreach ($eventos as $evento) {
    if ($evento["fecha"] < $hoy) {
        echo "<tr style='font-style: italic; color: red;'>
            <td>{$evento["nombre"]}</td>
            <td>{$evento["fecha"]}</td>
            <td>{$evento["tematica"]}</td>
            <td>{$evento["ubicacion"]}</td>
        </tr>";
    } else {
        echo "<tr style='font-weight: bold; color: green;'>
            <td>{$evento["nombre"]}</td>
            <td>{$evento["fecha"]}</td>
            <td>{$evento["tematica"]}</td>
            <td>{$evento["ubicacion"]}</td>
        </tr>";
    }
}