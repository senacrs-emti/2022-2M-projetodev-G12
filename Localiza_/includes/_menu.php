<style>
    @import url("http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css");
    .menu, .menu-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        list-style-type: none;
        margin: 0;
        padding: 0;
        background: #f7f7f7;
        z-index:10;  
        overflow:hidden;
        box-shadow: 2px 0 18px rgba(0, 0, 0, 0.26);
    }
    .menu li a{
      display: inline-block;
      text-indent: -500em;
      height: 5em;
      width: 5em;
      line-height: 5em;
      text-align:center;
      color: #03bb85;
      position: relative;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      transition: background 0.1s ease-in-out;
    }
    .menu li a:before {
      font-family: FontAwesome;
      speak: none;
      text-indent: 0em;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      font-size: 1.4em;
    }
    .menu li a.search:before {
      content: "\f002";
    }
    
    .menu li a.home:before {
      content: "\f039";
    }
    .menu-bar li a:hover,
    .menu li a:hover,
    .menu li:first-child a {
      background: #03bb85;
      color: #fff;
    }
    .menu-bar{
        overflow:hidden;
        left:5em;
        z-index:5;
        width:0;
        height:0;
        transition: all 0.1s ease-in-out;
    }
    .menu-bar li a{
      display: block;
      height: 4em;
      line-height: 4em;
      text-align:center;
      color: #03bb85;
      text-decoration:none;  
      position: relative;
      font-family:verdana;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      transition: background 0.1s ease-in-out;
    }
    .menu-bar li:first-child a{
        height:5em;
        background: #03bb85;
        color: #fff;    
        line-height:5
    }
    
    
    .para{
        color:#03bb85;
        padding-left:100px;
        font-size:3em;
        margin-bottom:20px;
    }
    
    .open{
        width:10em;
        height:100%;
    }
    
    @media all and (max-width: 500px) {
        .container{
            margin-top:100px;
        }
        .menu{
            height:5em;
            width:100%;
        }
        .menu li{
            display:inline-block;
        }
        .menu-bar li a{
            width:100%;
        }
        .menu-bar{
            width:100%;
            left:0;
          bottom: 0;
            height:0;
        }
        .open{
            width:100%;
            height:auto;
        }
        .para{
        padding-left:5px;
    }  
    }
    @media screen and (max-height: 34em){
      .menu li,
      .menu-bar {
        font-size:70%;
      }
    }
    @media screen and (max-height: 34em) and (max-width: 500px){
      .menu{
            height:3.5em;
        }
    }
    </style>
<nav>

    <ul class="menu">     
      <li title="home"><a href="#" class="menu-button home">menu</a></li>      
    </ul>
   
    <ul class="menu-bar">
        <li><a href="index.php" class="menu-button">Início</a></li>

        <?php 
        $sql = "SELECT * from categoria ";
        $exec = mysqli_query($conn, $sql);
        $numProdutos = mysqli_num_rows($exec);
        while ($dados = mysqli_fetch_assoc($exec)){
        ?>
        <li><a href="./categoria.php?id=<?php echo $dados['CategoriaID']?>"><?php echo $dados['nome']?></a></li>
      
      <?php
        }
        ?>
        
     </ul>
    </div>
  </div>
</div>
</nav>