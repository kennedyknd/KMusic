<?php
include_once('../cabecalho.php');
include_once 'Album.php';
include_once '../artista/Artista.php';
include_once '../genero/Genero.php';



$genero = new Genero();
$generos = $genero->recuperarDados();

$album = new Album();
$album->carregarPorId(1);

$artista = new Artista();
$artistas = $artista->recuperarDados($album->getIdArtista());

echo "<pre>";

print_r($artistas);
echo "<pre>";
?>