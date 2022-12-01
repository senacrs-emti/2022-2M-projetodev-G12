
<?php
include_once './includes/_banco.php';
include_once './includes/_header.php';
include_once './includes/_head.php';
include_once './includes/_menu.php';

?>


<body>

<header>

  <?php
   include_once './includes/_menu.php'
   ?>

   </header>

<main id="produto">
<div class="mb-12" style="width: 1000px; margin-left:15rem;">

<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);


$pesquisar = $_POST['pesquisar'];
$result_produtos = "SELECT * FROM produtos WHERE Nome LIKE '%$pesquisar%'";
$resultado_produtos= mysqli_query($conn, $result_produtos);


while ($rows_produtos = mysqli_fetch_array($resultado_produtos)) {

   ?>

   <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img class="imagem-produto" src="./contents/<?php echo  $rows_produtos['Imagem'];?>" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title"><?php echo $rows_produtos['Nome'];?></h5>
      <p class="card-text"><strong>Corredor:  </strong> <?php echo  $rows_produtos['Corredor'];?></p>
        <p class="card-text"><strong>Prateleira:  </strong> <?php echo  $rows_produtos['Prateleira'];?></p>
        <a href="./detalhe.php?id=<?php echo $rows_produtos ['ProdutoID']?>" id="button"class="btn btn-primary">Ver Localização</a>



      </div>
    </div>
  </div>
</div>

   <?php
   }

   ?> 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/meu-arquivo.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    
<script> 
    id="rendered-js" >
      $(document).ready(function () {
        $(".menu-button").click(function () {
          $(".menu-bar").toggleClass("open");
        });
      });
      
          </script>

</body>
</html>