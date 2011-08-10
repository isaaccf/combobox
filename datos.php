<?php
$conexion = pg_connect("host=localhost port=5432 dbname=proba user=postgres password=postgres");

$query = "SELECT nome FROM datos WHERE nome like '%".$_POST["q"]."%'";

$result = pg_fetch_array(pg_query($query));

echo $result[0];

?>
