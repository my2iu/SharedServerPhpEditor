<?php
require_once 'common.inc';
if (!isLoggedIn()) {
	// Access is forbidden since not logged in
	http_response_code(403);
	exit;
}
configureCsrfToken();
?>

