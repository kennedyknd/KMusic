<?php
include_once("Gravadora.php");

$gravadora = new Gravadora();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_gravadora'])) {
            $gravadora->alterar($_POST);
        } else {
            $gravadora->inserir($_POST);
        }
        break;
    case 'excluir':
        $gravadora->excluir($_GET['id_gravadora']);
        break;

    case 'verificar_razaoSocial':
        $existe = $gravadora->existeRazaoSocial($_GET['razaoSocial']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} gravadora com a Razao Social {$_GET['razaoSocial']}, por favor, informe outra Razao Social</h3></div>";
            }
        }
        die;
        break;

    case 'verificar_cnpj':
        $existe = $gravadora->existeCnpj($_GET['cnpj']);

        if (!empty($existe)) {
            if ($existe[0]['qtd'] > 0) {
                echo "<div class='alert'><h3>Já existe {$existe[0]['qtd']} gravadora com o cnpj {$_GET['cnpj']}, por favor, informe outro cnpj</h3></div>";
            }
        }
        die;
        break;

}

// Redireciona para a página index

header('location: index.php');
?>