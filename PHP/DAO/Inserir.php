<?php
    namespace Site\PHP\DAO;

    require_once('Conexao.php');

    use Site\PHP\DAO\Conexao;

    class Inserir{
        function cadastrarAcompanhante(
            Conexao $conexao,
            string $nome,
            string $sobrenome,
            string $telefone,
            string $email,
            string $login,
            string $senha
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into Acompanhante 
                (nome, sobrenome, telefone, email, login, 
                senha) 
                values ('$nome','$sobrenome','$telefone',
                '$email','$login','$senha')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método

        function cadastrarAssistida(
            Conexao $conexao,
            string $nome,
            string $sobrenome,
            string $telefone,
            string $email,
            int $codAcompanhante
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into Assistida 
                (nome, sobrenome, telefone, email, codAcompanhante) 
                values ('$nome','$sobrenome','$telefone',
                '$email', $codAcompanhante)";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método


        function chamado(
            Conexao $conexao,
            int $chamado,
            string $numeroCartao,
            string $dataValidade,
            string $codSeguranca,
            string $nomeTitular
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into chamado 
            string $codSeguranca,
            string $nomeTitular
            (chamado,numeroCartao,dataValidade,codSeguranca,) 
                values ('$chamado','$numeroCartao','$dataValidade','$codSeguranca','$nomeTitular')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método



        function chamadosabertos(
            Conexao $conexao,
            int $chamadosabertos,
            string $categoria,
            string $datachamado
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into chamadosabertos 
                (chamadosabertos,categoria,datachamado) 
                values ('$chamadosabertos','$categoria','$datachamado')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método
        

        function vendasrealizadas(
            Conexao $conexao,
            int $vendasrealizadas,
            string $categoria,
           string $statusvendas
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into  vendasrealizadas
                (vendasrealizadas_id,categoria,statusvendas) 
                values ('$vendasrealizadas','$categoria','$statusvendas')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método
        
        function cartao(
            Conexao $conexao,
            string $numeroCartao,
           string $dataValidade,
           string $codSeguranca,
           string $nomeTitular

        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into cartao 
                (numeroCartao,dataValidade,codSeguranca,nomeTitular) 
                values ('$numeroCartao','$dataValidade','$codSeguranca','$nomeTitular')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método
    
        
        
    }//fim da classe


    
?>