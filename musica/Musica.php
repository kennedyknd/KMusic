<?php

include_once("../Conexao.php");

class Musica
{
    protected $id_musica;
    protected $nome;
    protected $duracao;
    protected $lancamento;
    protected $id_artista;
    protected $id_album;
    protected $id_genero;

    /**
     * @return mixed
     */
    public function getIdMusica()
    {
        return $this->id_musica;
    }

    /**
     * @param mixed $id_musica
     */
    public function setIdMusica($id_musica)
    {
        $this->id_musica = $id_musica;
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
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * @param mixed $duracao
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
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

        $sql = "SELECT * FROM musica";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_musica)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM musica WHERE id_musica = $id_musica";
        $dados = $conexao->recuperarDados($sql);

        $this->id_musica = $dados[0]['id_musica'];
        $this->nome = $dados[0]['nome'];
        $this->duracao = $dados[0]['duracao'];
        $this->lancamento = $dados[0]['lancamento'];
        $this->id_artista = $dados[0]['id_artista'];
        $this->id_album = $dados[0]['id_album'];
        $this->id_genero = $dados[0]['id_genero'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $nome = $dados['nome'];
        $duracao = $dados['duracao'];
        $lancamento = $dados['lancamento'];
        $id_artista = $dados['id_artista'];
        $id_album = $dados['id_album'];
        $id_genero = $dados['id_genero'];


        $sql = "INSERT INTO musica(nome,duracao, lancamento, id_artista, id_album, id_genero) VALUES('$nome','$duracao','$lancamento','$id_artista','$id_album','$id_genero')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_musica = $dados['id_musica'];
        $nome = $dados['nome'];
        $duracao = $dados['duracao'];
        $lancamento = $dados['lancamento'];
        $id_artista = $dados['id_artista'];
        $id_album = $dados['id_album'];
        $id_genero = $dados['id_genero'];

        $sql = "UPDATE musica SET nome = '$nome', duracao = '$duracao', lancamento = '$lancamento', id_artista = '$id_artista', id_album = '$id_album', id_genero = '$id_genero' WHERE id_musica = $id_musica";

        return $conexao->executar($sql);
    }

    public function excluir($id_musica)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM musica WHERE id_musica = $id_musica";

        return $conexao->executar($sql);
    }

    public function existeNome($nome)
    {
        $conexao = new Conexao();

//        $sql = "SELECT COUNT(*) qtd FROM cliente WHERE nome ='$nome';";
        $sql = "SELECT nome, COUNT(*) qtd FROM musica WHERE nome ='$nome'";
        $dados = $conexao->recuperarDados($sql);

        return $dados;
    }

}