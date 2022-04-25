<?php
$con = @new mysqli('localhost:3306', 'root', '', 'listaSpesaDB');
$q = 'SELECT * FROM lista ORDER BY voce ASC;';

$rs = $con->query($q);

$listaSpesa = [];
while($row = $rs->fetch_assoc())
	$listaSpesa[] = $row;

$rs->free();
$con->close();

header('Content-type:application/json');
echo json_encode($listaSpesa);