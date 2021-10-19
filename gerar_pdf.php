
<?php
include_once "conexao.php";

$busca = $_GET['busca'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, 'utf8');
//inserir o nome da tabela onde esta tblista_de_alunos e onde tem matricula, inserir o nome do que quer buscar                   
 $sql = " SELECT * FROM tblista_de_alunos WHERE matricula LIKE '%$busca%' ";
$result = mysqli_query($conn, $sql);
$conta = mysqli_num_rows($result);
while($linha = mysqli_fetch_array($result)){
   $matricula = $linha['matricula'];
   $nome = $linha['nome'];
   $turma = $linha['turma'];
   $curso = $linha['curso'];
}

if($conn){
    //echo 'conexao ok';
}else{
    echo 'conexao falhou';
}

$unixTime = time();
$timeZone = new \DateTimeZone('America/Sao_Paulo');

$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);

$formattedTime = $time->format('d/m/Y H:i:s');




?>
<?php

use function Composer\Autoload\includeFile;



//AUTOLOAD DO COMPOSER

require __DIR__. '/vendor/autoload.php';



use Dompdf\Dompdf;
use Dompdf\Options;


//INSTANCIAS DE OPTIONS
$options = new Options();
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);
$options->setIsPhpEnabled(true);



  //INSTANCIA DE DOMPDF
  
  $dompdf = new Dompdf($options);

  //CARREGAR HTML VINDO DE OUTRA PAGINA PARA EDITAR O DESIGN
  $html = file_get_contents('tabela.php');
  
  $dompdf->loadHtml($html);


  //Renderizar o HTML
  $dompdf->render();

  header('Content-type: application/pdf');
  echo $dompdf->output();


?>
<?php
require __DIR__. '/buscar_aluno.php';
?>

