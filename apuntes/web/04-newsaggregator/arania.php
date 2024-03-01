<?php
require('vendor/autoload.php');

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://www.fungipedia.org',
    'timeout'  => 2.0,
]);

$response = $client->request('GET', '/hongos.html');

$content = $response->getBody();

//echo "$content";

libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($content);
$xpath = new DOMXPath($doc);

$titles = $xpath->query('//*//h3[contains(@class, "catItemTitle")]');
$divs = $xpath->query('//div[contains(@class, "catItemHeaderFungi")]');
$array=[];
$arraydiv=[];


foreach ($divs as $key=>$div) {
    $arraydiv[$key]=$div->nodeValue;
}
foreach($titles as $key =>$title){
    $array[$key]=$title->nodeValue;
   
}

print_r($arraydiv);
/*
try{

    $db = new PDO('mysql:host=localhost;dbname=fungus','dani','1234');
    

}catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
    die();
}*/


?>

<!DOCTYPE html>
<html>
<head>
    <title>Mapa</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Daniel García Ayala"/>
    <meta name="description" content="Mapa"/>
    <meta name="editor" content="Manual"/>
    <meta name="keywords" lang="es" content=""/>

</head>
<body>
    <h1>Página de hongos :D</h1>
    <ul>
        <?php for($i=0;$i<count($array);$i++){?>
            <li><?=$array[$i]?></li>
        <?php }?>
    </ul>
</body>