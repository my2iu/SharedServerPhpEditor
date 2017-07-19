<?php


function isLoggedIn() {
	session_start();
	return isset($_SESSION['loggedin']);
}
function logout() {
	session_start();
	unset($_SESSION['loggedin']);
}
function login() {
	session_start();
	$_SESSION['loggedin'] = 1;
}
function configureCsrfToken() {
	global $csrf;
	if (!isset($_SESSION['CSRF_TOKEN'])) {
	        $_SESSION['CSRF_TOKEN'] = bin2hex(random_bytes(32));
	}
	$csrf = $_SESSION['CSRF_TOKEN'];
}

function isCsrfTokenValid($token) {
	global $csrf;
	return hash_equals($csrf, $_POST['CSRF_TOKEN']);
}



?>
