<?php

include_once("../Conexao.php");

class Album
{
    protected $id_album;
    protected $nome;
    protected $lancamento;
    protected $id_artista;
    protected $id_genero;

    /**
     * @return mixed
     */
    public function getIdAlbum()
    {
        return $this->id_album;
    }

    /**
     * @param mixed $id_album
     */
    public function setIdAlbum($id_album)
    {
        $this->id_album = $id_album;
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
    public function getLancamento()
    {
        return $this->lancamento;
    }

    /**
     * @param mixed $lancamento
     */
    public function setLancamento($lancamento)
    {
        $this->lancamento = $lancamento;
    }

    /**
     * @return mixed
     */
    public function getIdArtista()
    {
        return $this->id_artista;
    }

    /**
     * @param mixed $id_artista
     */
    public function setIdArtista($id_artista)
    {
        $this->id_artista = $id_artista;
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

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM album";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_album)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM album WHERE id_album = $id_album";
        $dados = $conexao->recuperarDados($sql);

        $this->id_album = $dados[0]['id_album'];
        $this->nome = $dados[0]['nome'];
        $this->lancamento = $dados[0]['lancamento'];
        $this->id_artista = $dados[0]['id_artista'];
        $this->id_genero = $dados[0]['id_genero'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $nome = $dados['nome'];
        $lancamento = $dados['lancamento'];
        $id_artista = $dados['id_artista'];
        $id_genero = $dados['id_genero'];


        $sql = "INSERT INTO album(nome, lancamento, id_artista, id_genero) VALUES('$nome','$lancamento','$id_artista','$id_genero')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_album = $dados['id_album'];
        $nome = $dados['nome'];
        $lancamento = $dados['lancamento'];
        $id_artista = $dados['id_artista'];
        $id_genero = $dados['id_genero'];

        $sql = "UPDATE album SET nome = '$nome', lancamento = '$lancamento', id_artista = '$id_artista', id_genero = '$id_genero' WHERE id_album = $id_album";

        return $conexao->executar($sql);
    }

    public function excluir($id_album)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM album WHERE id_album = $id_album";

        return $conexao->executar($sql);
    }

    public function existeNome($nome)
    {
        $conexao = new Conexao();

//        $sql = "SELECT COUNT(*) qtd FROM cliente WHERE nome ='$nome';";
        $sql = "SELECT nome, COUNT(*) qtd FROM album WHERE nome ='$nome'";
        $dados = $conexao->recuperarDados($sql);

        return $dados;
    }
    
}