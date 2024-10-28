<?php
$conexao;
if (!function_exists('connect')) {
    function connect()
    {
        global $conexao;
        $servidor = 'localhost';
        $nomeUsuario = 'root';
        $senhaUsuario = '';
        $base = 'login';
        $conexao = mysqli_connect(
            $servidor,
            $nomeUsuario,
            $senhaUsuario,
            $base
        ) or die(mysqli_connect_error());
    }
}

if (!function_exists('query')) {
    function query($sql)
    {
        global $conexao;
        mysqli_query($conexao, "SET CHARACTER SET utf8");
        $query = mysqli_query($conexao, $sql) or
            die(mysqli_error($conexao));
        return $query;
    }
}

if (!function_exists('close')) {
    function close()
    {
        global $conexao;
        mysqli_close($conexao);
    }
}
