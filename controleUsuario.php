<?php
include 'crudUsuario.php';
$opcao = $_POST["opcao"];
switch ($opcao) {
    case 'Cadastrar':
        cadastrarUsuario($_POST["nome"], sha1($_POST["senha"]));
        header("Location: paginaLogin.php");
        break;
    case 'Entrar':
        $nome = $_POST["nome"];
        $senha = sha1($_POST["senha"]);
        $resultados = buscarUsuario($nome);
        foreach ($resultados as $banco);
        if ($nome === $banco["nome"]) {
            if ($senha === $banco["senha"]) {
                session_start();
                $_SESSION["nome"] = $nome;
                header("Location: home.php");
            } else {
                echo "<script>alert('Senha Incorreta!');</script>";
                echo "<script>window.location = 'paginaLogin.php';</script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!');</script>";
            echo "<script>window.location = 'paginaLogin.php';</script>";
        }
        break;

    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('Saiu da sessão!');</script>";
        echo "<script>window.location = 'paginaLogin.php';</script>";
        break;
}