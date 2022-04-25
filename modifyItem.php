<?php
// file: modifyItem.php

if(
	isset($_REQUEST['id']) &&
	!empty(trim($_REQUEST['id'])) &&
	isset($_REQUEST['voce']) &&
	!empty(trim($_REQUEST['voce']))
) {
	$id = trim($_REQUEST['id']) + 0;
	$voce = trim($_REQUEST['voce']);

	include_once 'config.inc.php';

	$q = "
		UPDATE {$TABNAME}
		SET voce='$voce'
		WHERE id=$id;
	";

	$rs = $con->query($q);

	if($con->errno > 0 || $con->affected_rows === 0) {
		echo "Errore Query $q {$con->error}";
		die;
	}

	$con->close();

	unset($rs, $con);
}

header('location: ./');