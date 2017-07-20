<?php
include 'authenticate.inc';
checkCsrf($_REQUEST['csrf']);
$filename = checkDirFileValidAndReturn($_REQUEST['dir'], $_REQUEST['file']);
if (!file_exists($filename)) {
	http_response_code(404);
	exit;
}
if (isset($_REQUEST['newfile'])) {
	// Copy file
	$newfilename = checkDirFileValidAndReturn($_REQUEST['dir'], $_REQUEST['newfile']);
	file_put_contents($newfilename, file_get_contents($filename));
} else {
	// Delete file
	unlink($filename);
}
?>

{
	"status": 'OK' 
}
