<?php
    namespace Site;
    session_start();
    require_once('PHP/DAO/Conexao.php');
    require_once('PHP/DAO/Consultar.php');
    use Site\PHP\DAO\Conexao;
    use Site\PHP\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css ">
    <title>Login Cliente</title>
</head>
<body>
    <center>
        <div id="areaLogin">
            <img src="./imagens/logoSemFundo.png" alt=""><br>
            <p style="font-weight: bold;" class="textoBrancoLogin">Login</p><br>
            <form method="POST">
                <input name="inputUsuario" class="inputLogin" type="text" placeholder="Usuário"><br><br>
                <input name="inputSenha" class="inputLogin" type="password" placeholder="Senha"><br><br><br>
                <?php
                    echo '<button id="botaoEntrar" href="">Entrar</button><br><br>';

                    //Declarando as variváveis
                    $usuario = "";
                    $senha = "";

                    if(isset($_POST['inputUsuario']) && isset($_POST['inputSenha'])){
                        $usuario = $_POST['inputUsuario'];
                        $senha = $_POST['inputSenha'];
                        if($consultar->consultarLogin($conexao, 'Acompanhante', 'login', $usuario,'senha', $senha) == true)
                        {
                            $_SESSION['nome'] = $consultar->pegarDado($conexao, 'Acompanhante', 'login', $usuario, 'nome');
                            $_SESSION['email'] = $consultar->pegarDado($conexao, 'Acompanhante', 'login', $usuario, 'email');
                            header("Location: index.php");
                        }
                        else{
                            echo "<div style='color: red; font-weight: bold'>Usuário e senha não válidos!</div>"; 
                        }
                    }
                    
                ?>
                <a id="botaoCadastrar" href="cadastro.php">Cadastrar-se</a><br><br><br>
                <a style="font-size: 120%; font-weight: bold;" class="textoBrancoLogin" href="loginAdmin.php">Área da empresa</a>
            </form>
        </div>
    </center>
</body>
</html>