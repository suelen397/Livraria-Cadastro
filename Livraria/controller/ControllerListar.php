<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getLivro();
        foreach ($row as $value){

            echo '<div class="col-sm-4 d-flex mb-3">';
            echo '<div class="container-fluid">';
            echo '<div class="row justify-content-center">';
            echo '<div class="card " style="width: 18rem;">';
            echo '<img src="../livro.jpg" class="card-img-top">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' .$value['nome'] . '</h5>';
            echo '<p class="card-text"> <strong>Autor: </strong>' .$value['autor'] .'</p>';
            echo '</div>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"><strong>Número de páginas: </strong>'.$value['quantidade'] .'</li>';
            echo '<li class="list-group-item"><strong>Preço: </strong> R$'.$value['preco'] .'</li>';
            echo '<li class="list-group-item"><strong>Data de Publicação: </strong>'.$value['data'] .'</li>';
            echo '</ul>';
            echo '<div class="card-body">';
            echo "<a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['nome']."'>Excluir</a>";
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}