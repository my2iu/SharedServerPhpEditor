<?php
include 'authenticate.inc';
$files = scandir('/var/www/html/edit');

?>

[
<?php 
	$isFirst = true;
	for ($i = 0; $i < count($files); ++$i) {
		$file = $files[$i];
		// Remove hidden files and . and ..
		if ($file[0] == '.') continue;
		// Skip directories
		if (is_dir($file)) continue;
		// Print file
		if (!$isFirst)
			echo ', ';
		$isFirst = false;
		echo "\"$file\"";
	}
?>
]
