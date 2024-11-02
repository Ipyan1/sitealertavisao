<?php
    namespace Site;
    session_start();
    require_once('PHP/DAO/Conexao.php');
    require_once('PHP/DAO/Inserir.php');
    require_once('PHP/DAO/Consultar.php');
    use Site\PHP\DAO\Conexao;
    use Site\PHP\DAO\Inserir;
    use Site\PHP\DAO\Consultar;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $consultar = new Consultar();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css ">
        <title>Cadastro</title>
    </head>
    <body>
        <center>
            <div id="areaLogin">
                <img src="./imagens/logoSemFundo.png" alt=""><br>
                <p style="font-weight: bold;" class="textoBrancoLogin">Cadastro</p><br>
                <form method="POST">
                    <div id="nomeCompleto">
                        <input name="inputNome" id="loginNome" class="inputLogin" type="text" placeholder="Nome">
                        <input name="inputSobrenome" id="loginSobrenome" class="inputLogin" type="text" placeholder="Sobrenome">
                    </div><br>
                    <!-- <input style="font-size: 150%;" class="inputLogin inputCadastro" type="date"><br><br> -->
                    <input name="inputEmail" class="inputLogin inputCadastro" type="text" placeholder="Email"><br><br>
                    <input name="inputTelefone" class="inputLogin inputCadastro" type="number" placeholder="Telefone"><br><br>
                    <input name="inputUsuario" class="inputLogin inputCadastro" type="text" placeholder="Usuário"><br><br>
                    <input name="inputSenha" class="inputLogin inputCadastro" type="password" placeholder="Senha"><br><br>
                    <?php
                        echo '<button id="botaoEntrar">Próximo</button><br><br>';
                        
                        //Declarando as variváveis
                        $nome = "";
                        $sobrenome = "";
                        $email = "";
                        $telefone = "";
                        $usuario = "";
                        $senha = "";

                        //Impedindo que ao acessar a página, seja pega os campos vazios
                        if (isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) &&
                            isset($_POST['inputEmail']) && isset($_POST['inputTelefone']) &&
                            isset($_POST['inputUsuario']) && isset($_POST['inputSenha']))
                        {
                            $nome = $_POST['inputNome'];
                            $sobrenome = $_POST['inputSobrenome'];
                            $email = $_POST['inputEmail'];
                            $telefone = $_POST['inputTelefone'];
                            $usuario = $_POST['inputUsuario'];
                            $senha = $_POST['inputSenha'];
                            
                            if($usuario == "" && $senha == ""){
                                echo "<div style='color: red; font-weight: bold'>Os campos usuários e senha não podem
                                        estar vazios</div>";
                            }
                            else{
                                if($consultar->consultarCadastro($conexao, 'Acompanhante', 'login', $usuario) == true){
                                    echo "<div style='color: red; font-weight: bold'>Usuário já existente</div>";
                                }
                                else{
                                    $_SESSION['acompanhanteNome'] = $nome;
                                    $_SESSION['acompanhanteSobrenome'] = $sobrenome;
                                    $_SESSION['acompanhanteTelefone'] = $telefone;
                                    $_SESSION['acompanhanteEmail'] = $email;
                                    $_SESSION['acompanhanteUsuario'] = $usuario;
                                    $_SESSION['acompanhanteSenha'] = $senha;
                                    header("Location: cadastroAssistida.php");
                                }
                            }
                        }
                    ?>
                    <a id="botaoCadastrar" href="loginCliente.php">Login</a><br>
                </form>
            </div>
        </center>
    </body>
</html>
