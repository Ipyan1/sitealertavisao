<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Faixa Etária</title>
</head>
<body>
    <header id="headerAdmin">
        <a href="index.php">
            <img id="logoCabecalho" src="./imagens/logoCabecalho.png" alt="">
        </a>
        <input id="pesquisa" type="text">
            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="imagens/botaoAcessarUsuario.png" alt="">
            </a>
                <!-- MenuUsuario -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <a id="botaoLogin" href="loginCliente.php" class="offcanvas-title" id="offcanvasRightLabel">Fazer Login</a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                </div>
                <!-- ------------------------------- -->
    </header>
    <center class="textoBranco" style="margin-top: 1%">
        <div style="margin-bottom: 2%;" id="secao1Titulo">
            <a href="relatorio.php">
                <img src="./imagens/botaoVoltar.png" alt="">
            </a>
            <h2>Faixa etária dos usuários</h2>
        </div>
        <div style="background-color: white; width: 50%;">
            <canvas id="grafico"></canvas>
        </div>
    </center>
</body>
</html>


<script>
     const ctx = document.getElementById('grafico');

new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Red', 'Blue', 'Yellow'],
    datasets: [{
      label: '# of Votes',
      data: [50, 25, 25],
      borderWidth: 1,
      backgroundColor: ['#FACC67', '#C8C0B0', '#444141']
    }]
  },
  options: {
    scales: {
      x: {
        grid: {
          display: false,
        },
        ticks: {
          display: false //Remover eixo X
        }
      },
      y: {
        grid: {
          display: false
        },
        ticks: {
          display: false //Remover eixo y
        }
      },
    },
    plugins: {
      legend: {
        position: 'right',
      },
    }
  }
});
</script>