<?php
include_once("Banda.php");

$banda = new banda();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_banda'])) {
            $banda->alterar($_POST);
        } else {
            $banda->inserir($_POST);
        }
        break;
    case 'excluir':
        $banda->excluir($_GET['id_banda']);
        break;

    case 'verificar_nome':
        $existe = $banda->existeNome($_GET['nome']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} banda com o nome {$_GET['nome']}, por favor, informe outro nome</h3></div>";
            }
        }
        die;
        break;
}

// Redireciona para a página index

header('location: index.php');
?>