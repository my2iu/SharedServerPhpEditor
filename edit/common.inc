<?php
$allowedDirs = array('../');
function isDirAllowed($dir) {
	global $allowedDirs;
	return in_array($dir, $allowedDirs);
}
function checkDirValid($dir) {
	if (!isDirAllowed($dir)) {
		http_response_code(403);
		exit;
	}
}
function checkDirFileValidAndReturn($dir, $file) {
	checkDirValid($dir);
	return $dir . $file;
}

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
function checkCsrf($token) {
	if (!isCsrfTokenValid($token)) {
		http_response_code(403);
		exit;
	}
}

function isCsrfTokenValid($token) {
	global $csrf;
	return hash_equals($csrf, $token);
}



?>
