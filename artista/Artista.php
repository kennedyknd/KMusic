<?php

include_once("../Conexao.php");

class Artista
{
    protected $id_artista;
    protected $nome;
    protected $datanasci;
    protected $cidade;
    protected $pais;
    protected $ocupacao;
    protected $instrumento;
    protected $paginaWeb;
    protected $afiliacao;
    protected $id_genero;
    protected $id_gravadora;
    protected $id_banda;

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
    public function getOcupacao()
    {
        return $this->ocupacao;
    }

    /**
     * @param mixed $ocupacao
     */
    public function setOcupacao($ocupacao)
    {
        $this->ocupacao = $ocupacao;
    }

    /**
     * @return mixed
     */
    public function getInstrumento()
    {
        return $this->instrumento;
    }

    /**
     * @param mixed $instrumento
     */
    public function setInstrumento($instrumento)
    {
        $this->instrumento = $instrumento;
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

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM artista";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_artista)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM artista WHERE id_artista = $id_artista";
        $dados = $conexao->recuperarDados($sql);

        $this->id_artista = $dados[0]['id_artista'];
        $this->nome = $dados[0]['nome'];
        $this->datanasci = $dados[0]['datanasci'];
        $this->cidade = $dados[0]['cidade'];
        $this->pais = $dados[0]['pais'];
        $this->ocupacao = $dados[0]['ocupacao'];
        $this->instrumento = $dados[0]['instrumento'];
        $this->paginaWeb = $dados[0]['paginaWeb'];
        $this->afiliacao = $dados[0]['afiliacao'];
        $this->id_genero = $dados[0]['id_genero'];
        $this->id_gravadora = $dados[0]['id_gravadora'];
        $this->id_banda = $dados[0]['id_banda'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $nome = $dados['nome'];
        $datanasci = $dados['datanasci'];
        $cidade = $dados['cidade'];
        $pais = $dados['pais'];
        $ocupacao = $dados['ocupacao'];
        $instrumento = $dados['instrumento'];
        $paginaWeb = $dados['paginaWeb'];
        $afiliacao = $dados['afiliacao'];
        $id_genero = $dados['id_genero'];
        $id_gravadora = $dados['id_gravadora'];
        $id_banda = $dados['id_banda'];

        $sql = "INSERT INTO artista (nome, datanasci, cidade, pais, ocupacao, instrumento, paginaWeb, afiliacao, id_genero, id_gravadora, id_banda)";
        $sql .= "VALUES ('$nome','$datanasci','$cidade','$pais','$ocupacao','$instrumento','$paginaWeb','$afiliacao','$id_genero','$id_gravadora','$id_banda')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();


        $id_artista = $dados['id_artista'];
        $nome = $dados['nome'];
        $datanasci = $dados['datanasci'];
        $cidade = $dados['cidade'];
        $pais = $dados['pais'];
        $ocupacao = $dados['ocupacao'];
        $instrumento = $dados['instrumento'];
        $paginaWeb = $dados['paginaWeb'];
        $afiliacao = $dados['afiliacao'];
        $id_genero = $dados['id_genero'];
        $id_gravadora = $dados['id_gravadora'];
        $id_banda = $dados['id_banda'];

        $sql = "UPDATE artista SET nome = '$nome', datanasci = '$datanasci', cidade = '$cidade', pais = '$pais', ocupacao = '$ocupacao', instrumento = '$instrumento', paginaWeb = '$paginaWeb', afiliacao = '$afiliacao', id_genero = '$id_genero', id_gravadora= '$id_gravadora', id_banda= '$id_banda' WHERE id_artista = $id_artista";

        return $conexao->executar($sql);
    }

    public function excluir($id_artista)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM artista WHERE id_artista = $id_artista";


        return $conexao->executar($sql);
    }
}