
<?php
  
  
  
//incluir a conexao
include_once("conexao.php");

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


<!doctype html>
<html lang="en">
  <head>
    <title>Declaração</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
  </head>
  <body>
     <img src="cabeçalho.jpg" alt="">

     <h5>Declaração  $nome </h5>

     <?php echo  $matricula; ?>
     

     
       
        

        <p class="assinatura val">
            
            <span class="span ">Erica Santana de Souza   </span> <br>
            <span class="span">(Gestora escolar) </span> 
        </p>
       
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>