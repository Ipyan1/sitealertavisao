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
    <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .payment-container {
    width: 400px;
    padding: 20px;
    background-color: #d9d9d9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  .payment-container h2 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .qr-code {
    width: 100px;
    height: 100px;
    background-color: #000;
    margin: 0 auto 20px;
  }

  .instruction {
    font-size: 14px;
    color: #333;
    margin-bottom: 15px;
  }

  .pix-code {
    background-color: #f3f3f3;
    padding: 10px;
    font-size: 12px;
    color: #333;
    border-radius: 5px;
    margin-bottom: 20px;
    word-wrap: break-word;
  }

  .copy-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffd966;
    color: #000;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .copy-button:hover {
    background-color: #ffcc33;
  }

  
<style>
  .qr-and-text {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .qr-code {
    width: 100px;
    height: 100px;
    background-color: #000;
    flex-shrink: 0;
  }

  .text-container {
    flex: 1;
    text-align: left;
  }

  .payment-container img {
    max-width: 80%; /* Ajuste a largura conforme necessário */
    height: auto; /* Mantém a proporção da imagem */
    margin: 0 auto; /* Centraliza a imagem */
    display: block; /* Garante que a imagem seja um bloco dentro do contêiner */
  }

  .payment-container {
    width: 1000px; /* Aumentado de 400px para 600px */
    padding: 30px; /* Aumentado de 20px para 30px */
    background-color: #d9d9d9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


.qr-and-text {
    display: flex;
    align-items: center;
    gap: 20px;
}

.qr-code {
    width: 200px;
    height: 200px;
    background-color: #000;
    flex-shrink: 0;
}

.text-container {
    flex: 1;
    text-align: left;
}
.button-container {
    display: flex;
    justify-content: center;
}
</style>
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
            
            </a>
            <h2 class="textoBranco" align=center>QRCODE</h2>
        </div>
        <br> <br>
   <div class="payment-container">
    <h2>Pagamento via Pix</h2>
    <div class="qr-and-text">
        <img src="./imagens/qrcode.png" alt="QR Code" class="qr-code">
        <div class="text-container">
            <p class="instruction">
                Leia o QR code com o aplicativo de seu banco para finalizar a compra.
            </p>
            <p class="instruction">
                Se preferir, copie o código abaixo e insira-o no aplicativo para completar a transação.
            </p>
            <div class="pix-code" id="pixCode"></div>
<div class="button-container">
    <button class="copy-button" onclick="copyPixCode()">Copiar código</button>
</div>
    </div>
</div>

<script>
  function generateRandomPixCode() {
    let pixCode = "00020126360014BR.GOV.BCB.PIX0114";
    pixCode += Math.random().toString().slice(2, 16); // Generate random 14-digit ID
    pixCode += "BR5927YourName6008City62070503***6304";
    pixCode += Math.floor(Math.random() * 10000).toString().padStart(4, '0'); // Generate random checksum
    return pixCode;
  }

  function displayPixCode() {
    const pixCodeElement = document.getElementById('pixCode');
    pixCodeElement.innerText = generateRandomPixCode();
  }

  function copyPixCode() {
    const pixCode = document.getElementById('pixCode').innerText;
    navigator.clipboard.writeText(pixCode).then(() => {
      alert('Código copiado para a área de transferência!');
    });
  }
  displayPixCode();
</script>
</body>
</html>


