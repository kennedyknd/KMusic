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

    case 'verificar_nome':
        $existe = $musica->existeNome($_GET['nome']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} música com o nome {$_GET['nome']}</h3></div>";
            }
        }
        die;
        break;

}

// Redireciona para a página index

header('location: index.php');
?>