<?php
include_once("Musica.php");

$musica = new Musica();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_musica'])) {
            $musica->alterar($_POST);
        } else {
            $musica->inserir($_POST);
        }
        break;
    case 'excluir':
        $musica->excluir($_GET['id_musica']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>