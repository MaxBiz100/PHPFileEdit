<?php
if (isset($_POST['editor'])) {
	$file = $_POST['filename'];
	$handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
	fwrite($handle, $_POST['editor']);
	fclose($handle);
}
header("Location: index.html?file=$_POST[filename]");
exit();
?>
