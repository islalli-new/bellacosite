<?php

$r = isset($_GET['r']) ? $_GET['r'] : null;

switch ($r) {

	case 'home':
    $title_pag = "Bem vindo à Bell Aço";
    $desc_pag = "Descrição geral da pagina";
    $layout = "./layouts/home.php";
	break;

	case 'produto-x':
    $title_pag = "Produto X - Bell Aço";
    $desc_pag = "Descrição do produto";
    $layout = "./layouts/produto-x.php";
	break;

	default:
	  $title_pag  = "Bem vindo à Bell Aço";
    $desc_pag = "Comércio de ferro e aço em Uberlândia - MG";
    $layout = "./layouts/temp.php";
	break;

};

?>