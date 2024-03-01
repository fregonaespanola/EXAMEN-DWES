<php


try{
$db = new PDO('mysql:host=localhost;dbname=menosdaw','menosdaw','1234');

$consulta = $db->prepare("SELECT id, tarea, prioridad FROM Todo ORDER BY :orderby $order LIMIT :limite OFFSET :offset");

$consulta ->bindParam(':orderby',$orderby, PDO::PARAM_INT);
$consulta ->bindValue(':limite',NUM_ELEM_POR_PAG, PDO::PARAM_INT);
$consulta ->bindValue(':offset',NUM_ELEM_POR_PAG*($page-1), PDO::PARAM_INT);
$results = $consulta->execute(); //valor boolean

$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

$consulta_count = $db->query("SELECT Count(id) AS N FROM Todo");
$count = $consulta_count->fetch();
$count = $count[0];
$num_pages = ceil($count/NUM_ELEM_POR_PAG);

}catch(PDOException $e){
echo "ERROR: ".$e->getMessage();
die();
}

?>