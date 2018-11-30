<?php

/*
	ESSE ARQUIVO VAI SER O "INDEX" PARA PRODUTOS
*/

require_once "controller/ProdutoController.php";

//ROTAS -

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $cat = new ProdutoController();
        $cat->principal();
        exit;
    default:
        echo "Ação inválida";

}	