<?php
include 'authenticate.inc';
?>

{
	"dir": <?php echo json_encode($allowedDirs[0]) ?>,
	"csrf": <?php echo json_encode($csrf) ?>
}
