<?php
include 'authenticate.inc';
checkCsrf($_REQUEST['csrf']);
$filename = checkDirFileValidAndReturn($_REQUEST['dir'], $_REQUEST['file']);
//$contents = $_REQUEST['contents'];
$contents = $_FILES['contents'];
// TODO: Validate the file is allowed to be saved
// TODO: Validate the file name

//$f = fopen($filename, 'w') or die('Unable to open file');
// TODO: better error checking
//fwrite($f, $contents);
//fclose($f);
move_uploaded_file($_FILES['contents']['tmp_name'], $filename);
?>

{
	"status": 'OK' 
}
