<?php

	require_once("app.php");

	header("Content-type: text/xml; charset: UTF-8");
	
	echo "<?xml version='1.0' encoding='UTF-8'?>
		<browserconfig>
		   <msapplication>
		      <tile>
		         <square150x150logo src='".$base_url."img/mstile-150x150.png' />
		         <TileColor>".$base_url."</TileColor>
		      </tile>
		   </msapplication>
		</browserconfig>
	";


?>