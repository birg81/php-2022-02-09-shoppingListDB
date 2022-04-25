<html lang="it">
<head>
<title>ShopList with DBMS</title>
<script>
function modifyItem(id, voceOld) {
	let voce = prompt(`Inserisci il nuovo valore a ${voceOld}`, voceOld).trim();
	if(
		voce !== null &&
		voce != '' &&
		voce.toLowerCase() != voceOld.toLowerCase()
	)
		document.location = `modifyItem.php?id=${id}&voce=${voce}`;
}
</script>
</head>
<body>
<form method="POST" action="addItem.php">
	<input type="text" name="voce" placeholder="inserisci voce"/>
	<input type="submit" value="&#x2714;"/>
</form>
<?php
include_once 'listItems.php';
if(count($listItems) === 0) {
?>
<p>lista vuota, inserire voci</p>
<?php } else { ?>
<ul>
<?php foreach($listItems as $id => $voce) {?>
<li>
	<a href="delItem.php?id=<?= $id ?>">&#x274c;</a>
	<a href="javascript:modifyItem(<?= $id ?>, '<?= $voce ?>')">&#x270d;</a>
	<?= $voce ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</body>
</html>