<?php 
	$path = '/dir0/dir1/myfile.php';
	$file = 'file1.txt';
	// Return filename
	//echo basename($path);

	// Return filename without ext

	//echo basename($path, '.php');

	// Return dir name from path

	//echo dirname($path);

	// Check if file exsits, works for folder as well
	//echo file_exists($file);

	// Get abs path
	//echo realpath($file);

	// Check to see if file
	//echo is_file($file);

	// Check if writeable
	//echo is_writable($file);

	// Check if readable
	//echo is_readable($file);

	// Get File size
	//echo filesize($file);

	// Manipulate files

	// Create a directory
	//mkdir('testing');

	// Delete a directory that has no files
	//rmdir('testing');

	// Copy file
	//echo copy($file, 'file2.txt');

	// Rename file
	//rename('file2.txt', 'myfile.txt');

	// Delete file
	//unlink('myfile.txt');

	// Write from file to string
	//echo file_get_contents($file);

	// Write string to file
	//echo file_put_contents($file, 'Goodbye World');
/*
	$current = file_get_contents($file);
	$current .= ' Goodbye World';
	file_put_contents($file, $current);

	// Open file for reading
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	fclose($handle);
*/
	// Open file for writing
	$handle = fopen('file2.txt', 'w');
	$txt = "John Doe\n";
	fwrite($handle, $txt);
	$txt = "Steve Smith\n";
	fwrite($handle, $txt);
	fclose($handle);
?>