<?php
include 'authenticate.inc';
checkCsrf($_REQUEST['csrf']);
$filename = checkDirFileValidAndReturn($_REQUEST['dir'], $_REQUEST['file']);
//$contents = $_REQUEST['contents'];
//sleep(3);
$contents = $_FILES['contents'];
// TODO: Validate the file is allowed to be saved
// TODO: Validate the file name

//$f = fopen($filename, 'w') or die('Unable to open file');
// TODO: better error checking
//fwrite($f, $contents);
//fclose($f);
if (!move_uploaded_file($_FILES['contents']['tmp_name'], $filename)) {
	http_response_code(400);
	exit;
}
?>

{
	"status": 'OK' 
}
