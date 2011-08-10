<?php
$conexion = pg_connect("host=localhost port=5432 dbname=proba user=postgres password=postgres");

$query = "SELECT id, nome FROM datos WHERE nome like '%".$_POST["q"]."%'";

$result = pg_query($query);

$out = "{";

while ($row = pg_fetch_assoc($result)){
	$out .= $row["id"].":\"".$row["nome"]."\",";
}

$out = substr($out, 0, strlen($out)-1);
$out .= "}";

print $out;

?>

