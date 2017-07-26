<?php
$allowedDirs = array('../');
function configureSessionCookiePath() {
	// Make sure the session cookie for each user's home directory is
	// different so there aren't any collisions (this is needed because
	// we're using mod_ruid2 with php, meaning php will store session
	// information for each user in a file owned by that server user,
	// meaning that the session info will be 
	$pathParts = explode('/', $_SERVER['REQUEST_URI']);
	if (count($pathParts) > 1 and $pathParts[0] == '' and 
			0 === strpos($pathParts[1], '~')) {
		session_name($pathParts[1] . '+PHPEDITOR');
	}
}
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
	configureSessionCookiePath();
	session_start();
	return isset($_SESSION['loggedin']);
}
function logout() {
	configureSessionCookiePath();
	session_start();
	unset($_SESSION['loggedin']);
}
function login() {
	configureSessionCookiePath();
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
