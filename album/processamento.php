<?php
include_once("Album.php");

$album = new album();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_album'])) {
            $album->alterar($_POST);
        } else {
            $album->inserir($_POST);
        }
        break;
    case 'excluir':
        $album->excluir($_GET['id_album']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>