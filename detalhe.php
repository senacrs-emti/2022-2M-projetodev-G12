<?php
include_once './includes/_banco.php';
include_once './includes/_menu.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

    
  </head>
  
<body>

<main>
<style>
    
body {
 
  font-family: "Open Sans";
  font-weight:300;
}

h1.product-page {
  font-weight:800;
  margin: 0 0 20px;
  padding:0;
  font-size:26px;
  color: #03bb85;
}

p {
  margin: 0 0 20px;
  padding: 0;
}
p.product-info-meta {
  margin:0;
}

.container {
  width:982px;
  margin:0 auto;
  background:#fff;
  border-left:1px solid #ddd;
  border-right:1px solid #ddd;
  padding: 0;
}

.product-left-container {
  width:542px;
  padding: 20px;
  min-height:200px;
  float:left;
}
.product-col-container {
  width: 360px;
  padding: 20px;
  min-height:200px;
  float:left;
}
.main-product-container .product-left-container {
  
  min-height: 440px;
  border-bottom: 1px solid #ddd;
}
.main-product-container .product-col-container {
  background:#fafafa;  
  min-height: 440px;
  border-bottom: 1px solid #ddd;
  border-left:1px solid #ddd;
  width: 359px;
}

.product-price {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  padding: 10px;
  background:#fff;
}
.product-price-meta {
  font-size:12px;
  font-style: italic;
  font-weight: 400;
}
.price {
  color: #03bb85;
  font-weight:800;
}
.produto-pg{
  width: 15rem;
  height: 15rem;
}
#product{
margin-top: 10rem;
margin-bottom: 10rem;

}

</style> 

<body>
<?php 
 
   $produto = $_GET['id'];
   $sql = "SELECT * from produtos where ProdutoID = {$produto}";
   $exec = mysqli_query($conn, $sql);
   $numProdutos = mysqli_num_rows($exec);

   while ($dados = mysqli_fetch_assoc($exec)){
   ?>


      <div id="product" class="container" >
      <div class="product-container main-product-container">        
        <div class="product-left-container">
          <img class="produto-pg" src="./contents/<?php echo $dados['Imagem'];?>" width="100%"/>
        </div>
      <div class="product-col-container">        
        <h1 class="product-page"><?php echo $dados['Nome'];?></h1>
        <p class="product-price">
        <strong>Descrição </b><br/> <?php echo $dados['Descricao'];?></p>
          <p><b>Prateleira: </b><?php echo $dados['Prateleira'];?></p>
          <p><b>Corredor: </b><?php echo $dados['Corredor'];?></p>
          <b>Preço:</b><span class="price">R$ <?php echo $dados['Preco'];?></span></p>         
        </div>
          </div>
            </div>
          
                 
          <?php

            }

          ?> 

  <img id="mapa" src="./contents/mapa.png" class="rounded mx-auto d-block" alt="...">
          
    </main>


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