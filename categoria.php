
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

<div class="mb-12" style="width: 1000px; margin-left:15rem; margin-top:6rem;">
  
<?php 
   $categoria= $_GET['id'];
   $sql = "SELECT * from produtos where CategoriaID = {$categoria}";
   $exec = mysqli_query($conn, $sql);
   $numProdutos = mysqli_num_rows($exec);
 
   while ($dados = mysqli_fetch_assoc($exec)){
   ?>
   <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img class="imagem-produto" src="./contents/<?php echo $dados['Imagem'];?>" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
        <p class="card-text"><strong>Corredor:  </strong> <?php echo $dados['Corredor'];?></p>
        <p class="card-text"><strong>Prateleira:  </strong> <?php echo $dados['Prateleira'];?></p>
        <a href="./detalhe.php?id=<?php echo $dados['ProdutoID']?>" id="button"class="btn btn-primary">Ver Localização</a>
      </div>
    </div>
  </div>
</div>




   <?php
   }
   ?> 


</main>

<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script id="rendered-js" >

      $(document).ready(function () {
        $(".menu-button").click(function () {
          $(".menu-bar").toggleClass("open");
        });
      });
      
    </script>


</body>
</html>
<?php
mysqli_close($conn);
?>