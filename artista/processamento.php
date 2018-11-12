<?php
include_once("Artista.php");

$artista = new Artista();

switch ($_GET['acao']){
    case 'salvar':

        $origem = $_FILES['foto']['tmp_name'];
        $destino = '../upload/cliente/' . $_FILES['foto']['name'];
        move_uploaded_file($origem, $destino);

        if(!empty($_POST['id_artista'])) {
            $artista->alterar($_POST);
        } else {
            $artista->inserir($_POST);
        }
        break;
    case 'excluir':
        $artista->excluir($_GET['id_artista']);
        break;

    case 'verificar_nome':
        $existe = $artista->existeNome($_GET['nome']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} artista com o nome {$_GET['nome']}</h3></div>";
            }
        }
        die;
        break;
}

// Redireciona para a página index

header('location: index.php');
?>