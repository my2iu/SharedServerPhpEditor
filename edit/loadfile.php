<?php
include 'authenticate.inc';
$filename = checkDirFileValidAndReturn($_REQUEST['dir'], $_REQUEST['file']);
// TODO: Validate the file is allowed to be loaded
try {
	$filecontents = file_get_contents($filename);
	if ($filecontents === false) {
		http_response_code(404);
		exit;
	}
} catch (Exception $e) {
	http_response_code(404);
	exit;
}

$contentsString = json_encode($filecontents);
if ($contentsString === false) {
	// Data can't be encoded
	http_response_code(400);
	exit;
}
?>

{
	"contents": <?php echo $contentsString; ?>

}
