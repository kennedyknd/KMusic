<?php

include_once("../Conexao.php");

class Banda
{
    protected $id_banda;
    protected $nome;
    protected $cidade;
    protected $pais;
    protected $datanasci;
    protected $afiliacao;
    protected $paginaWeb;
    protected $id_genero;
    protected $id_gravadora;

    /**
     * @return mixed
     */
    public function getIdBanda()
    {
        return $this->id_banda;
    }

    /**
     * @param mixed $id_banda
     */
    public function setIdBanda($id_banda)
    {
        $this->id_banda = $id_banda;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
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

    /**
     * @return mixed
     */
    public function getAfiliacao()
    {
        return $this->afiliacao;
    }

    /**
     * @param mixed $afiliacao
     */
    public function setAfiliacao($afiliacao)
    {
        $this->afiliacao = $afiliacao;
    }

    /**
     * @return mixed
     */
    public function getPaginaWeb()
    {
        return $this->paginaWeb;
    }

    /**
     * @param mixed $paginaWeb
     */
    public function setPaginaWeb($paginaWeb)
    {
        $this->paginaWeb = $paginaWeb;
    }

    /**
     * @return mixed
     */
    public function getIdGenero()
    {
        return $this->id_genero;
    }

    /**
     * @param mixed $id_genero
     */
    public function setIdGenero($id_genero)
    {
        $this->id_genero = $id_genero;
    }

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

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM banda";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_banda)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM banda WHERE id_banda = $id_banda";
        $dados = $conexao->recuperarDados($sql);

        $this->id_banda = $dados[0]['id_banda'];
        $this->nome = $dados[0]['nome'];
        $this->cidade = $dados[0]['cidade'];
        $this->pais = $dados[0]['pais'];
        $this->datanasci = $dados[0]['datanasci'];
        $this->afiliacao = $dados[0]['afiliacao'];
        $this->paginaWeb = $dados[0]['paginaWeb'];
        $this->id_genero = $dados[0]['id_genero'];
        $this->id_gravadora = $dados[0]['id_gravadora'];

    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $nome = $dados['nome'];
        $cidade = $dados['cidade'];
        $pais = $dados['pais'];
        $datanasci = $dados['datanasci'];
        $afiliacao = $dados['afiliacao'];
        $paginaWeb = $dados['paginaWeb'];
        $id_genero = $dados['id_genero'];
        $id_gravadora = $dados['id_gravadora'];


        $sql = "INSERT INTO banda(nome, cidade, pais, datanasci, afiliacao, paginaWeb, id_genero, id_gravadora) VALUES('$nome','$cidade ','$pais','$datanasci','$afiliacao','$paginaWeb','$id_genero','$id_gravadora')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_banda = $dados['id_banda'];
        $nome = $dados['nome'];
        $cidade = $dados['cidade'];
        $pais = $dados['pais'];
        $datanasci = $dados['datanasci'];
        $afiliacao = $dados['afiliacao'];
        $paginaWeb = $dados['paginaWeb'];
        $id_genero = $dados['id_genero'];
        $id_gravadora = $dados['id_gravadora'];

        $sql = "UPDATE banda SET nome = '$nome', cidade = '$cidade', pais = '$pais', datanasci = '$datanasci', afiliacao = '$afiliacao', paginaWeb = '$paginaWeb', id_genero = '$id_genero', id_gravadora = '$id_gravadora' WHERE id_banda = $id_banda";

        return $conexao->executar($sql);
    }

    public function excluir($id_banda)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM banda WHERE id_banda = $id_banda";

        return $conexao->executar($sql);
    }
}