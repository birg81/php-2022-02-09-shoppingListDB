<?php
// file: addItem.php

if(
	isset($_REQUEST['voce']) &&
	!empty(trim($_REQUEST['voce']))
) {
	$voce = trim($_REQUEST['voce']);

	include_once 'config.inc.php';

	$q = "INSERT INTO {$TABNAME}(voce) VALUES ('$voce');";

	$rs = $con->query($q);

	if($con->errno > 0 || $con->affected_rows === 0) {
		echo "Errore Query $q {$con->error}";
		die;
	}

	$con->close();

	unset($rs, $con);
}

header('location: ./');