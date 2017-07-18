<?php
include 'authenticate.php';
$filename = $_REQUEST['file'];
// TODO: Validate the file is allowed to be loaded
$filecontents = file_get_contents($filename);
?>

{
	"contents": <?php echo json_encode($filecontents); ?>
}
