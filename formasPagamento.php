<?php
    namespace Site;
    session_start();

    function deslogar(){
        $_SESSION['nome'] = "";
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="./script.js"></script>
    <title>Formas de Pagamento</title>
</head>
<body>
    <header>
        <a href="index.php">
            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt="">
        </a>
        <input id="pesquisa" type="text">
            <a style="text-decoration: none;" 
                class="menu" href="quemSomos.php">
                Quem Somos
            </a>
            <a style="text-decoration: none; font-weight: bold;" 
                class="menu" href="compra.php">
                Comprar
            </a>
            <a style="text-decoration: none;" 
            class="menu" href="suporte.php">
                Suporte
            </a>
            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="imagens/botaoAcessarUsuario.png" alt="">
            </a>
                <!-- MenuUsuario -->
                <?php
                    if(isset($_SESSION['nome']) && $_SESSION['nome'] != ""){
                        echo '<div style="border-radius: 10px; height: 20%; width: 20%" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">';
                        echo '<div style="display: flex; align-items: center;border-bottom:0.5px solid black;" class="offcanvas-header">';
                        echo '<img src="./imagens/iconeUsuario.png"/>';
                        echo '<div style="display: flex; flex-direction: column; margin-left: 8%">';
                        echo '<h5>Bem vindo ', $_SESSION['nome'], '</h5>';
                        echo $_SESSION['email'];
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="offcanvas-body">';
                        // variavel sair recebe 1 para executar a função do php
                        echo '<a style="text-decoration: none; color: black" href="index.php?sair=1">Sair</a>';
                        echo '</div>';
                        echo '</div>';
                        if(isset($_GET['sair']) == 1){
                            deslogar();
                        }
                    }
                    else{
                        echo '<div style="border-radius: 10px; height: 10%; width: 15%"" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">';
                        echo '<div class="offcanvas-header">';
                        echo '<a id="botaoLogin" href="loginCliente.php" class="offcanvas-title" id="offcanvasRightLabel">Fazer Login</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
                <!-- ------------------------------- -->
    </header>
    <center style="margin-top: 1%;">
        <div id="secao1Titulo">
            <a href="compra.php">
                <img src="./imagens/botaoVoltar.png" alt="">
            </a>
            <h2 class="textoBranco">Escolha a forma que deseja pagar</h2>
        </div>
        <div style="display: flex;
                    justify-content: center;
                    align-items: center;
                    border: 2px solid white;
                    margin-left: 15%;
                    margin-right: 15%;
                    padding-top: 2%;
                    padding-bottom: 2%;
                    margin-bottom: 5%;" 
            id="secao1">
            <img src="./imagens/logoCartao.png" alt="">
            <div style="font-size: 130%; font-weight: bold;
                        margin-left: 3%; margin-right: 30%;" class="textoBranco">
                Cartão de crédito
            </div>
            <a href="cartao.php" style="font-size: 130%; padding-left: 2%;
                      padding-right: 2%;"     
                id="botaoEntrar">Selecionar</a>
        </div>

        <div style="display: flex;
                    justify-content: center;
                    align-items: center;
                    border: 2px solid white;
                    margin-left: 15%;
                    margin-right: 15%;
                    padding-top: 2%;
                    padding-bottom: 2%;
                    margin-bottom: 5%;" 
            id="secao1">
            <img src="./imagens/logoPix.png" alt="">
            <div style="font-size: 130%; font-weight: bold;
                        margin-left: 15%; margin-right: 30%;" class="textoBranco">
              Pix
            </div>
            <a href="pagamentopix.php" style="font-size: 130%; padding-left: 2%;
                      padding-right: 2%;"     
                id="botaoEntrar">Selecionar</a>
        </div>

        
        <!-- <div style="display: flex;
                    justify-content: center;
                    align-items: center;
                    border: 2px solid white;
                    margin-left: 15%;
                    margin-right: 15%;
                    padding-top: 2%;
                    padding-bottom: 2%;" 
            id="secao1">
            <img src="./imagens/logoPix.png" alt="">
            <div style="font-size: 130%; font-weight: bold;
                        margin-left: 3%; margin-right: 42%;" class="textoBranco">
                Pix
            </div>
            <a href="pix.php" style="font-size: 130%; padding-left: 2%;
            padding-right: 2%;" id="botaoEntrar">Selecionar</a>
        </div> -->
    </center>
</body>
</html>