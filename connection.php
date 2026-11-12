<?php
    $ip='localhost';
    $usuario='root';
    $senha='password';
    $bd='labweb';
    
    $conexao = mysqli_connect("$ip", "$usuario", "$senha", "$bd");

    mysqli_query($conexao,"set NAMES utf8;");
?>