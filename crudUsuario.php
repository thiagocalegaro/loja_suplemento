<?php
include 'conexaoBD.php';
function cadastrarUsuario($nome, $senha)
{
    connect();
    query("INSERT INTO usuario (nome, senha) VALUES ('$nome', '$senha')");
    close();
}
function buscarUsuario($nome)
{
    connect();
    $resultados = query("SELECT * FROM usuario WHERE nome='$nome'");
    close();
    return $resultados;
}
