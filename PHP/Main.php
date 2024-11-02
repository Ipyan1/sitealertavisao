<?php
    namespace Site\PHP;

    require_once('DAO/conexao.php');

    use Site\PHP\DAO\Conexao;

    $conexao = new Conexao();

    $conexao->conectar();
?>