<?php
	include "globals.php";

	if(isset($_POST['content'])){
		$indexContent['content']=htmlentities($_POST['content']);
	}

	file_put_contents('indexContent.php', '<?php return ' . var_export($indexContent, true) . ';');
	//header("Location: ../index.php?changesSaved=1");

?>