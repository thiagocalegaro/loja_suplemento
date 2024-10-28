<?php
    include_once 'crudProdutos.php';

    $opcao = $_POST["opcao"];
    switch ($opcao) {
        case 'Cadastrar':
            cadastrarProdutos($_POST["descricao"], $_POST["preco"], $_POST["sabor"]);
            header("Location: cadastrarProdutos.php");
            break;
        case 'Alterar':
            alterarProdutos($_POST["codigo"], $_POST["descricao"], $_POST["preco"], $_POST["sabor"]);
            header("Location: home.php");
            break;
        case 'Excluir':
            excluirProdutos($_POST["codigo"]);
            header("Location: home.php");
            break;
    }
