<?php
include 'authenticate.inc';
$dir = $_REQUEST['dir'];
checkDirValid($dir);
$files = scandir($dir);
?>

[
<?php 
	$isFirst = true;
	for ($i = 0; $i < count($files); ++$i) {
		$file = $files[$i];
		// Remove hidden files and . and ..
		if ($file[0] == '.') continue;
		// Skip directories
		if (is_dir($dir . $file)) continue;
		// Print file
		if (!$isFirst)
			echo ', ';
		$isFirst = false;
		echo "\"$file\"";
	}
?>
]
