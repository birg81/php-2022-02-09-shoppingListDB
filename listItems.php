<?php
// file: listItems.php

include_once 'config.inc.php';

$q = "
	SELECT *
	FROM {$TABNAME}
	ORDER BY voce ASC;
";

$rs = $con->query($q);

if($con->errno > 0) {
	echo "Errore Query $q {$con->error}";
	die;
}
$listItems = [];
for(; $row = $rs->fetch_assoc(); $listItems[$row['id']] = $row['voce']);

$rs->free();
$con->close();

unset($rs, $con);