<?php
    namespace Site\PHP\DAO;
    require_once('conexao.php');

    use Site\PHP\DAO\Conexao;

    class Consultar{

        function consultarLogin(Conexao $conexao,
                                  string $nomeTabela,
                                  string $nomeCampo,
                                  string $valorCampo,
                                  string $nomeCampo2,
                                  string $valorCampo2)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela where $nomeCampo = '$valorCampo'
                        and $nomeCampo2 = '$valorCampo2'";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $valorCampo && $dados["senha"] == $valorCampo2){
                        // echo "Entrou";
                        return true;
                    }
                }
                return false;
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function consultarCadastro(Conexao $conexao,
                                    string $nomeTabela,
                                    string $nomeCampo,
                                    string $valorCampo,)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela where $nomeCampo = '$valorCampo'";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $valorCampo){
                        return true; //Encerrando um processo para ver só um dado específico
                    }
                }
                return false;  
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function pegarDado(Conexao $conexao,
                            string $nomeTabela,
                            string $nomeCampo,
                            string $valorCampo,
                            string $dadoRetornado)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela where $nomeCampo = '$valorCampo'";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $valorCampo){
                        return $dados[$dadoRetornado]; //Encerrando um processo para ver só um dado específico
                    }
                }
                return 'dado não encontrado';  
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }
    }
?>