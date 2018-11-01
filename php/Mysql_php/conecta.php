<?php
class CONEXAO{

            var $usuario = "root";

            var $senha = "usbw";

            var $sid = "localhost";

            var $banco = "gestao_projetos";

            var $consulta = "";

            var $dadosConsulta="";

        var $link = "";  	
        
        function CONEXAO(){

            $this->Conecta();

        }

        function Conecta(){

            $this->link = mysqli_connect($this->sid,$this->usuario,$this->senha);

            if (!$this->link){

                die("Problema na Conexão com o Banco de Dados");

            }

            elseif (!mysqli_select_db($this->link,$this->banco)){

                die("Problema na Conexão com o Banco de Dados");

            }

        }

    function Desconecta(){

            return mysqli_close($this->link);

        }

    function Consulta($consulta){

            $this->consulta = $consulta;
            $i = 0;
            if($resultado = mysqli_query($this->link,$this->consulta)){

                while($linha = mysqli_fetch_row($resultado)){
                    for($j=0;$j<=count($linha)-1;$j++){
                        $this->dadosConsulta[$i][$j]=$linha[$j];
                    }
                    $i++;

                }

                return $this->dadosConsulta;

            }else{

                return 0;

            }

        }

}




?>