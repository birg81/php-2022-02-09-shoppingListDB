<?php
// file: delItem.php

if(
	isset($_REQUEST['id']) &&
	!empty(trim($_REQUEST['id']))
) {
	$id = trim($_REQUEST['id']) + 0;

	include_once 'config.inc.php';
	$q = "DELETE FROM {$TABNAME} WHERE id=$id;";
	$rs = $con->query($q);

	if($con->errno > 0 || $con->affected_rows === 0) {
		echo "Errore Query $q {$con->error}";
		die;
	}
	$con->close();
	unset($rs, $con);
}
header('location: ./');