<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
//inserir o nome do banco de dados
$dbname = "ecit_lista_alunos";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 
if ($conn){
   // echo "Coxexão OK";
} else{
    echo "Conexão com o banco Falhou";
}
?>