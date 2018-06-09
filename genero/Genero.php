<?php

include_once("../Conexao.php");

class Genero
{
    protected $id_genero;
    protected $nome;
    protected $descricao;

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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM genero";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_genero)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM genero WHERE id_genero = $id_genero";
        $dados = $conexao->recuperarDados($sql);

        $this->id_genero = $dados[0]['id_genero'];
        $this->nome = $dados[0]['nome'];
        $this->descricao = $dados[0]['descricao'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $nome = $dados['nome'];
        $descricao = $dados['descricao'];


        $sql = "INSERT INTO genero(nome,descricao) VALUES('$nome','$descricao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_genero = $dados['id_genero'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];

        $sql = "UPDATE genero SET nome = '$nome', descricao = '$descricao' WHERE id_genero = $id_genero";

        return $conexao->executar($sql);
    }

    public function excluir($id_genero)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM genero WHERE id_genero = $id_genero";

        return $conexao->executar($sql);
    }
}