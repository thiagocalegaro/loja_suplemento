<?php
include 'conexaoBD.php';



function cadastrarProdutos($desc, $preco, $sabor)
{
    connect();
    query("INSERT INTO produto (descricao, preco, sabor) VALUES ('$desc', $preco, '$sabor')");
    close();
}

function mostrarProdutos()
{
    connect();
    $resultados = query("SELECT * FROM produto");
    close();
    return $resultados;
}

function alterarProdutos($codigo, $desc, $preco, $sabor)
{
    connect();
    query("UPDATE produto SET descricao='$desc', preco=$preco, sabor='$sabor' WHERE codigo=$codigo");
    close();
}

function excluirProdutos($codigo)
{
    connect();
    query("DELETE FROM produto WHERE codigo=$codigo");
    close();
}

function mostrarProdutoAlterar($codigo)
{
    connect();
    $resultados = query("SELECT * FROM produto WHERE codigo=$codigo");
    close();
    return $resultados;
}
