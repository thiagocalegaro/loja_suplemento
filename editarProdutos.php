<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
    <title>Editar Produto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
        <img src="logo2.jpg" alt="" width="100" height="100">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">LIFT suplements</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarProdutos.php">Cadastrar Produtos</a>
                        </li>

                    </ul>
                    <ul class="perfil">
                        <form method="post" action="controleUsuario.php">
                            <button type="submit" name="opcao" value="Sair" class="btnsair">Sair</button>
                        </form>
                        <img src="foto.png" alt="" class="foto">
                        <div class="nome">
                            <?php
                            session_start();

                            if (isset($_SESSION["nome"])) {
                                echo 'Olá ', $_SESSION['nome'];
                            } else {
                                header("Location: paginaLogin.php");
                            }
                            ?>
                        </div>
                    </ul>
                </div>
            </div>
    </nav>
    <div id="container">
        <?php
        include 'crudProdutos.php';
        $codigo = $_GET["codigo"];
        $resultados = mostrarProdutoAlterar($codigo);
        foreach ($resultados as $linha);
        ?>
        <form method="post" action="controleProdutos.php">
            <form method="post" action="controleProdutos.php">
                <h1>Editar Produto</h1>
                <div class="mb-3">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" value="<?=
                                                                                                    $linha['descricao'] ?>">
                </div>
                <div class="mb-3">
                    <label for="preco">Preço:</label>
                    <input type="number" step=0.01 class="form-control" name="preco" id="preco" value="<?=
                                                                                                        $linha['preco'] ?>">
                </div>
                <div class="mb-3">
                    <label for="sabor">Sabor:</label>
                    <input type="text" class="form-control" name="sabor" id="sabor" value="<?=
                                                                                            $linha['sabor'] ?>">
                </div>
                <input type="hidden" name="codigo" value="<?= $linha['codigo'] ?>">
                <div id="center">
                    <button type="submit" class="btn btn-primary" name="opcao" value="Alterar" id="btnalt"><strong>Alterar</strong></button>
                    <button type="submit" class="btn btn-danger" name="opcao" value="Excluir" id="btnexc"><strong>Excluir</strong></button>
                    <a class="btn btn-light" href="home.php" id="btncanc"><strong>Cancelar</strong></a>
                </div>
            </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>