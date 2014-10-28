<?php
	$allowedExts = array('gif', 'png', 'PNG', 'jpg','JPG', 'txt');
	$temp = explode('.', $_FILES['upload']['name']);
	$extension = end($temp);
	$ignoreFile = false;
	$target_dir='../img/files/';

	// Check file size -- i dont care
	//if ($uploadFile_size > 500000) {
    //	echo "Sorry, your file is too large.";
    //}

	// imgtypes only
	
	if ((($_FILES['upload']['type'] == 'image/png') ||
		($_FILES['upload']['type'] == 'image/jpeg') ||
		($_FILES['upload']['type'] == 'image/gif') ||
		($_FILES['upload']['type'] == 'application/pdf') &&
		(in_array($extension, $allowedExts))))
		{
			if ($_FILES["upload"]["error"] == 0)
			{
				
				if(file_exists($target_dir . $_FILES['upload']['name']) == false)
				{
					
					echo "Uploaded: " . $_FILES["upload"]["name"] . "<br>";
					echo "Type: " . $_FILES["upload"]["type"] . "<br>";
					echo "Size: " . ($_FILES["upload"]["size"] / 1024) . " kB<br>";
					echo "Stored in: " . $_FILES["upload"]["tmp_name"] . "<br>";
					
					move_uploaded_file($_FILES['upload']['tmp_name'],
						$target_dir . $_FILES['upload']['name']);
				}
				else{
					echo "Sorry, file already exists.";
				}
			}
		}else{
			echo 'file type: ' . $_FILES["upload"]["type"] . ' or ' . $extension  . ' not allowed, not uploaded';
		}

	if(in_array($extension, $allowedExts) || $extension == '')
		$resume = $_FILES['upload']['name'];
	else
		$ignoreFile = true;

?>