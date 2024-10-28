<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
    <title>LIFT suplements</title>
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

    <div class="container">
        <h1>Produtos</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Sabor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'crudProdutos.php';

                $resultados = mostrarProdutos();
                foreach ($resultados as $linha) {
                ?>
                    <tr>
                        <td><?php echo $linha['codigo']; ?></td>
                        <td><?php echo $linha['descricao']; ?></td>
                        <td><?php echo number_format($linha['preco'], 2); ?></td>
                        <td><?php echo $linha['sabor']; ?></td>
                        <td><a class="btn btn-success" id="textbtn" href="editarProdutos.php?codigo=<?php echo $linha['codigo']; ?>">Editar</a></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
</body>

</html>