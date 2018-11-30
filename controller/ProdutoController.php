<?php


class ProdutoController
{
    private $dados;
    public function principal(){
        $this->dados = array();
        $catdao = new CategoriaDAO();

        try{
            $categorias = $catdao->selectAll();
        }catch (PDOException $e){
            echo "Erro: ".$e->getMessage();
        }
        $this->dados['categorias'] = $categorias;

        View::carregar('view/template/cabecalho.html');
        View::carregar('view/categoria/listar.php', $this->dados);
        View::carregar('view/template/rodape.html');
    }