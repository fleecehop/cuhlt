<?php
	include "globals.php";

	if(isset($_POST['navInverse'])){
		
		if(($_POST['navInverse'])=='on'){
		
			$generalSettings['navbar_inverse']='true';
			echo "navbar_inverse='true'<br><br>";
		}
	}
	else{

		$generalSettings['navbar_inverse']='false';
		echo "navbar_inverse='false'<br><br>";
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
	if(isset($_POST['homeTabChk'])){
	
		if(($_POST['homeTabChk'])=='on'){
		
			$generalSettings['homeTabVisable']='true';
			echo "homeTabVisable='true'<br>";
		}

	}
	else{
	
		$generalSettings['homeTabVisable']='false';
		echo "homeTabVisable='false'<br>";
	}

	if(isset($_POST['musicTabChk']))
	{
		if(($_POST['musicTabChk'])=='on'){
		
			$generalSettings['musicTabVisable']='true';
			echo "musicTabVisable='true'<br>";
		}
	}
	else{
		
		$generalSettings['musicTabVisable']='false';
		echo "musicTabVisable='false'<br>";
		
	}
	
	if(isset($_POST['visualsTabChk'])){

		if(($_POST['visualsTabChk'])=='on'){
		
			$generalSettings['visualsTabVisable']='true';
			echo "visualsTabVisable='true'<br>";
		
		}
	}
	else{
	
		$generalSettings['visualsTabVisable']='false';
		echo "visualsTabVisable='false'<br>";
	
	}
	if(isset($_POST['teamTabChk']))
	{
		if(($_POST['teamTabChk'])=='on'){
		
			$generalSettings['teamTabVisable']='true';
			echo "teamTabVisable='true'<br>";
		}

	}
	else{
		
		$generalSettings['teamTabVisable']='false';
		echo "teamTabVisable='false'<br>";
	}
	if(isset($_POST['blogTabChk'])){

		if(($_POST['blogTabChk'])=='on'){
		
			$generalSettings['blogTabVisable']='true';
			echo "blogTabVisable='true'<br><br>";
		}	
	}
	else{
	
		$generalSettings['blogTabVisable']='false';
		echo "blogTabVisable='false'<br><br>";
	}
	
	///////////////////////////////////////////////////////////////////////////////////////////////////
	
	if(isset($_POST['brandTabIn'])){

		$generalSettings['brandTabText']=htmlentities($_POST['brandTabIn']);
		echo "brandTabText=" . $generalSettings['brandTabText']. "<br>";
	
	}
	if(isset($_POST['homeTabIn'])){

		$generalSettings['homeTabText']=htmlentities($_POST['homeTabIn']);
		echo "homeTabText=" . $generalSettings['homeTabText']. "<br>";
	
	}
	if(isset($_POST['musicTabIn'])){

		$generalSettings['musicTabText']=htmlentities($_POST['musicTabIn']);
		echo "musicTabText=" . $generalSettings['musicTabText']. "<br>";
	
	}
	if(isset($_POST['visualsTabIn'])){

		$generalSettings['visualsTabText']=htmlentities($_POST['visualsTabIn']);
		echo "visualsTabText=" . $generalSettings['visualsTabText']. "<br>";
	
	}
	if(isset($_POST['teamTabIn'])){

		$generalSettings['teamTabText']=htmlentities($_POST['teamTabIn']);
		echo "teamTabText=" . $generalSettings['teamTabText'] . "<br>";
	
	}

	if(isset($_POST['blogTabIn'])){

		$generalSettings['blogTabText']=htmlentities($_POST['blogTabIn']);
		echo "blogTabText=" . $generalSettings['blogTabText']. "<br>";
	
	}
	if(isset($_POST['logoutTabIn'])){

		$generalSettings['logoutTabText']=htmlentities($_POST['logoutTabIn']);
		echo "logoutTabText=" . $generalSettings['logoutTabText']. "<br><br>";
	
	}

	////////////////////////////////////////////////////////////////////////////////////////////

	if(isset($_POST['mainPgTitle'])){

		$generalSettings['indexTitle']= '"' . $_POST['mainPgTitle'] . '"' ;
		echo "indexTitle=" . $generalSettings['indexTitle']. "<br>";
	
	}
	if(isset($_POST['musicPgTitle'])){

		$generalSettings['mediaSoundsTitle']='"' . $_POST['musicPgTitle'] . '"';
		echo "mediaSoundsTitle=" . $generalSettings['mediaSoundsTitle']. "<br>";
	
	}
	if(isset($_POST['visualsPgTitle'])){

		$generalSettings['mediaVisualsTitle']='"' . $_POST['visualsPgTitle'] . '"';
		echo "mediaVisualsTitle=" . $generalSettings['mediaVisualsTitle']. "<br>";
	
	}
	if(isset($_POST['teamPgTitle'])){

		$generalSettings['teamTitle']='"' . $_POST['teamPgTitle'] . '"';
		echo "teamTitle=" . $generalSettings['teamTitle']. "<br>";
	
	}
	if(isset($_POST['blogPgTitle'])){

		$generalSettings['blogTitle']='"' . $_POST['blogPgTitle'] . '"';
		echo "blogTitle=" . $generalSettings['blogTitle']. "<br>";
	
	}
	if(isset($_POST['adminLoginPgTitle'])){

		$generalSettings['adminLoginTitle']='"' . $_POST['adminLoginPgTitle'] . '"';
		echo "adminLoginTitle=" . $generalSettings['adminLoginTitle']. "<br>";
	
	}
	if(isset($_POST['adminMainPgTitle'])){

		$generalSettings['adminMainTitle']='"' . $_POST['adminMainPgTitle'] . '"';
		echo "adminMainPg=" . $generalSettings['adminMainTitle']. "<br>";
	
	}
	//////////////////////////////////////////////////////////////////////////////////////////////

	file_put_contents('generalSettings.php', '<?php return ' . var_export($generalSettings, true) . ';');
	header("Location: ../adminMain.php");

?>
