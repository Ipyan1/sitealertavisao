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
    <title>Quem Somos</title>
</head>
<body>
    <header>
        <a href="index.php">
            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt="">
        </a>
        <input id="pesquisa" type="text">
            <a style="text-decoration: none; font-weight: bold;" 
                class="menu" href="quemSomos.php">
                Quem Somos
            </a>
            <a style="text-decoration: none;" 
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
        <h2 class="textoBranco">Quem somos nós?</h2>
        <div id="secao1">
            <div id="secao1Historia">
                <h3 style="text-align: start;" class="textoBranco">História</h3>
                <p style="font-size: 110%;
                          text-align: start;" 
                    class="textoBranco">
                    A Alerta Visão nasceu em fevereiro de 2024, motivada pela necessidade de promover a inclusão e a autonomia de pessoas com deficiência visual. A ideia surgiu quando um grupo de alunos do Senac São Bernardo, da turma TI18N do curso de Técnico de Informática, se uniu para desenvolver uma solução inovadora. Após meses de pesquisa e desenvolvimento, criaram um boné estiloso, equipado com sensores ultrassônicos em um suporte de 360 graus. Este produto revolucionário permite que os usuários identifiquem obstáculos acima da altura do corpo, proporcionando maior liberdade e segurança em suas caminhadas diárias.  
                </p>
            </div>
            <div style="font-size: 110%;
            text-align: start;"  id="secao1MissaoVisaoValores">
                <h3 class="textoBranco">Missão</h3>
                <p class="textoBranco">
                    Na Alerta Visão, buscamos apoiar pessoas com deficiência visual por meio de soluções inovadoras que garantam autonomia, segurança e inclusão social. Acreditamos que todos merecem viver plenamente, e fundamentamos nosso trabalho em estudos e pesquisas para transformar essa visão em realidade, utilizando tecnologia acessível e promovendo conscientização. 
                </p>
                <h3 class="textoBranco">Visão</h3>
                <p class="textoBranco">
                    Na Alerta Visão, valorizamos a diversidade e buscamos criar produtos inclusivos que atendam às necessidades de todos. Estamos comprometidos com a inovação e o desenvolvimento de soluções que melhorem a qualidade de vida das pessoas com deficiência visual. Acreditamos que a autonomia é fundamental, oferecendo produtos que proporcionam liberdade e segurança. Também nos dedicamos a impactar positivamente a comunidade, apoiando iniciativas de inclusão e acessibilidade. Por fim, priorizamos a qualidade em cada etapa do nosso processo, garantindo a segurança e eficácia de nossos produtos. 
                </p>
            </div>
        </div>
    </center>
</body>
</html>