<?php
ini_set('post_max_size', '5M');
ini_set('upload_max_filesize', '5M');

/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '../uploads'; // Relative to the root

//$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if(!empty($_FILES)) {

	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $targetFolder;
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','swf'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	
	if (move_uploaded_file($tempFile,$targetFile) ) {
		echo '1';
	} else {
		echo 'Invalid file type.';
	}
}
?>