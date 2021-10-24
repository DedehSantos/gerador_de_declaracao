

<?php include_once "conexao.php";?>


<!doctype html>
<html lang="en">
  <head>
    <title>Declaração</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    
  </head>
  <body>
<?php 
 $nome = $_GET['nome'];
 $matricula = $_GET['matricula'];
 $data = $_GET['data'];
 $turma = $_GET['turma'];
 $curso = $_GET['curso'];
 $assinatura = $_GET['assinatura'];
 $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, 'utf8');
     
  


if($assinatura == "Patricia Nogueira de Sousa" ){
   
   $cargo = "(Secretária Escolar)";
}
elseif($assinatura == "Erica Santana de Souza" ){
   
   $cargo = "(Gestora Escolar)";
}
elseif($assinatura == "Maria Gorette de Oliveira Emiliano" ){
   
   $cargo = "(Coordenação Pedagógica)";
}
 


?>
      <div class="container">


     <img src="cabeçalho.jpg" alt="">
   
     <div class="titulo">
         <h5>Declaração</h5> 
      </div>
    
      <div class="texto_da_declaracao">

          <p>Declaro para os devidos fins que, o (a) aluno (a) 	
          <b> <?php echo $nome ?></b>, 
          encontra-se matriculada nesta instituição de ensino sob nº de 
          matricula: <b> <?php echo $matricula ?></b> na <b> Escola Cidadã Integral 
          Técnica Professor Bráulio Maia Júnior </b> de INEP <b>25130331 </b> e CNPJ: <b>32.432.483/0001-0</b>, na 
          <b> <?php echo $turma ?></b> 
          do ensino médio no curso de 
          <b> <?php echo $curso ?></b>.</p>

      </div>
       
                <div class="cidade_data">
                    <p> Campina Grande, PB  <?php echo $data?> </p>
                </div>
          <div class="linha_da_assinatura"></div>    
        <p class="assinatura">
          
            <span class="span "><b> <?php echo  $assinatura ?></b></span> <br>
            <span class="span"> <?php  echo $cargo ?> </span> 
        </p>
    
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    
  </body>
</html>








