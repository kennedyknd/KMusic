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

    case 'verificar_nome':
        $existe = $album->existeNome($_GET['nome']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} album com o nome {$_GET['nome']}</h3></div>";
            }
        }
        die;
        break;
        
}

// Redireciona para a página index

header('location: index.php');
?>