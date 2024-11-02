<?php
    namespace Site\PHP\DAO;

    class Conexao{
        
        function conectar(){
            try{
                $conn = mysqli_connect('db4free.net', 'alertavisao','12345678', 'alertavisao'); //fazendo a conexão(local, usuario, senha, nome do banco de dados)
                if($conn){
                    // echo "<br>Conectado com Sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }
            catch(Except $erro){
                return $erro;
            }
        }//Fim do conectar
    }//Fim da classe

?>