<?php

$r = isset($_GET['r']) ? $_GET['r'] : null;

switch ($r) {

	case 'login':
    $title_pag = "login";
    $desc_pag = "loginnnnsss";
    $layout = "./layouts/login.php";
	break;

	default:
	  $title_pag  = "Bem vindo à Bell Aço";
    $desc_pag = "Comércio de ferro e aço em Uberlândia - MG";
    $layout = "./layouts/temp.php";
	break;

};

?>