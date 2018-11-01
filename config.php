<?php
    require_once('php/Mysql_php/conecta.php');
    $objMysql = new CONEXAO();

    $sql = "select * from gestao_projetos.usuarios";

    $dados = $objMysql->Consulta($sql);

    echo "<pre>";
   print_r($dados);
    echo "</pre>";
    





?>