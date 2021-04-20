<?php

$r = isset($_GET['r']) ? $_GET['r'] : null;

switch ($r) {

	case 'home':
    $title_pag = "Bem vindo à Bell Aço";
    $desc_pag = "Descrição geral da pagina";
    $layout = "./layouts/home.php";
	break;

	default:
	  $title_pag  = "Bem vindo à Bell Aço";
    $desc_pag = "Comércio de ferro e aço em Uberlândia - MG";
    $layout = "./layouts/temp.php";
	break;

};

?>