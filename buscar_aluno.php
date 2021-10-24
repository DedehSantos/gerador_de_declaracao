

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

setlocale(LC_TIME, 'portuguese'); 
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');
strftime("%d de %B de %Y", strtotime($date));
$formattedTime = strftime(" %d de %B de %Y", strtotime($date));
?>



<!doctype html>
<html lang="en">
  <head>
    <title>BUSCAR ALUNO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles-buscar.css">
</head>
  <body>
    <img class="img-fluid" src="img/Pessoa-tendo-organizacao-nos-documentos-scaled.jpg" alt="">
   
      <form action="tabela.php" name="busca" method="GET" class="form-busca-aluno" >
          <label >Nome:</label> <br>
          <input type="text" value="<?php echo "$nome";?>"  name="nome"> <br>
          <label >Matricula:</label><br>
          <input type="text" value="<?php echo "$matricula";?>" name="matricula" > <br>
          <label f >Ano:</label>  <br>
          <input type="text"value=" <?php echo $formattedTime; ?> " name="data">  <br>
          <label >Serie:</label>  <br>
          <input type="text "value="<?php echo "$turma";?>"  name="turma" > <br>
          <label >Curso:</label>  <br>
          <input type="text" value="<?php echo "$curso";?>" name="curso"  > <br> 
          <div class="quem-assina">
          <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="assinatura" value="Erica Santana de Souza"checked >Erica Santana de Sousa
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="assinatura" value="Patricia Nogueira de Sousa">Patricia Nogueira de Sousa
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="assinatura" value="Maria Gorette de Oliveira Emiliano" >Maria Gorette de Oliveira Emiliano
</div>
        

            </div>
          
            
        <button type="submt" class="btn btn-success"> CONFIRMAR DADOS</button>

          </div>
           
      </form>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

