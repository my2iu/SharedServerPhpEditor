<?php 
function insertDb($data) {
	$db = new sQLite3('../db/listdb');
	if (!$db) {
		echo $db->lastErrorMsg();
		return false;
	}
	
	$stmt = $db->prepare('INSERT INTO list(row, data) VALUES(null, :val)');
	if (!$stmt) {
		echo $db->lastErrorMsg();
		return false;
	}
	$stmt->bindValue(':val', $data);
	$stmt->execute();

	$db->close();
}

function getDb() {
	$db = new sQLite3('../db/listdb');
	if (!$db) {
		echo $db->lastErrorMsg();
		return false;
	}

	$result = $db->query('SELECT data FROM list ORDER BY row');
	if (!$result) {
		echo $db->lastErrorMsg();
		return false;
	}

	$toReturn = array();
	$row = $result->fetchArray();
	while ($row) {
		array_push($toReturn, $row['data']);
		$row = $result->fetchArray();
	}
	
	$db->close();
	
	return $toReturn;
}

