<?php
include 'authenticate.php';
/*session_start();
if (!isset($_SESSION['CSRF_TOKEN'])) {
	$_SESSION['CSRF_TOKEN'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['CSRF_TOKEN'];
*/
// hash_equals($csrf, $_POST['CSRF_TOKEN'])
?>


<?php echo session_save_path(); ?>
Hi
