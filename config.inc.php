<?php
// file: config.inc.php

$HOST = 'localhost:3306';
$USER = 'root';
$PASS = '';
$DBNAME = 'listaSpesaDB';
$TABNAME = 'lista';

// prova ad effettuare la connessione altrimenti stampa gli errori e si blocca
try {
	$con = @new mysqli($HOST, $USER, $PASS);
} catch (Exception $e){
	echo $e->getMessage();
	die;
}

// prova a selezionare il database altrimenti recupera il codice SQL e lo importa in MySQL
try {
	$rs = $con->select_db($DBNAME);
	unset($rs);
	//echo "SELEZIONATO $DBNAME";
} catch(Exception $e){
	include_once "./{$DBNAME}.sql.php";
// esegue un file sql con più istruzioni
	$con->multi_query($SQL);
	echo "eseguita query $SQL";
}