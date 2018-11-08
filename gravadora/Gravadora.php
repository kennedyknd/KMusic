<?php

include_once("../Conexao.php");

class Gravadora
{
    protected $id_gravadora;
    protected $razaoSocial;
    protected $nomeFantasia;
    protected $cnpj;
    protected $pais;
    protected $datanasci;

    /**
     * @return mixed
     */
    public function getIdGravadora()
    {
        return $this->id_gravadora;
    }

    /**
     * @param mixed $id_gravadora
     */
    public function setIdGravadora($id_gravadora)
    {
        $this->id_gravadora = $id_gravadora;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @param mixed $razaoSocial
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * @param mixed $nomeFantasia
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getDatanasci()
    {
        return $this->datanasci;
    }

    /**
     * @param mixed $datanasci
     */
    public function setDatanasci($datanasci)
    {
        $this->datanasci = $datanasci;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM gravadora";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_gravadora)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM gravadora WHERE id_gravadora = $id_gravadora";
        $dados = $conexao->recuperarDados($sql);

        $this->id_gravadora = $dados[0]['id_gravadora'];
        $this->razaoSocial = $dados[0]['razaoSocial'];
        $this->nomeFantasia = $dados[0]['nomeFantasia'];
        $this->cnpj = $dados[0]['cnpj'];
        $this->pais = $dados[0]['pais'];
        $this->datanasci = $dados[0]['datanasci'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $razaoSocial = $dados['razaoSocial'];
        $nomeFantasia = $dados['nomeFantasia'];
        $cnpj = $dados['cnpj'];
        $pais= $dados['pais'];
        $datanasci= $dados['datanasci'];

        $sql = "INSERT INTO gravadora(razaoSocial, nomeFantasia, cnpj, pais, datanasci)";
        $sql .= "VALUES('$razaoSocial','$nomeFantasia','$cnpj','$pais','$datanasci')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_gravadora = $dados['id_gravadora'];
        $razaoSocial = $dados['razaoSocial'];
        $nomeFantasia = $dados['nomeFantasia'];
        $cnpj = $dados['cnpj'];
        $pais= $dados['pais'];
        $datanasci= $dados['datanasci'];

        $sql = "UPDATE gravadora SET razaoSocial = '$razaoSocial', nomeFantasia = '$nomeFantasia', cnpj = '$cnpj', pais = '$pais', datanasci = '$datanasci' WHERE id_gravadora = $id_gravadora";

        return $conexao->executar($sql);
    }

    public function excluir($id_gravadora)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM gravadora WHERE id_gravadora = $id_gravadora";

        return $conexao->executar($sql);
    }

    public function existeRazaoSocial($razaoSocial)
    {
        $conexao = new Conexao();

//        $sql = "SELECT COUNT(*) qtd FROM cliente WHERE razaoSocial ='$razaoSocial';";
        $sql = "SELECT razaoSocial, COUNT(*) qtd FROM gravadora WHERE razaoSocial ='$razaoSocial'";
        $dados = $conexao->recuperarDados($sql);

        return $dados;
    }

    public function existeCnpj($cnpj)
    {
        $conexao = new Conexao();

//        $sql = "SELECT COUNT(*) qtd FROM cliente WHERE cnpj ='$cnpj';";
        $sql = "SELECT cnpj, COUNT(*) qtd FROM gravadora WHERE cnpj ='$cnpj'";
        $dados = $conexao->recuperarDados($sql);

        return $dados;
    }

}