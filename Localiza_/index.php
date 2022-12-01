
<?php
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<body>



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


  footer{
  height: 290px;
  width: 100%;
  background-color: #f6f7f9;
}

footer .container{
  padding-top: 30px;
}

li {
  list-style-type: none;
  color: #000000;
  
}

h1{
  color: #03bb85;
  font-size: medium;
  font-weight: bold;
}

.footer{
  color: #FFFFFF;
  font-size: small;
}




#devs{
   
 margin-left: 620px;
 position: relative;
 bottom:225px; ;
}
#Redes{
  margin-left: 850px;
  position: relative;
  bottom: 410px;

  
}
#linkedin{
  width: 43px;
  height: 43px;
  
 
}

#instagram{
  width: 35px;
  height: 35px;
  margin-bottom: 3px;
}

#facebook{
 
  width: 35px;
  height: 35px;
  margin-bottom: 3px;
}

    </style>


   <div class="wrapper">
    <div class="container">
      <h1 id="bar-title">O que procuras?</h1>
      <form role="search" method = "POST" action= "pesquisar.php" class="search-form form" >
        <label>
            <span class="screen-reader-text">Search for...</span>
            <input type="search" class="search-field" name= "pesquisar" onkeyup="myFunction()" placeholder="Digite o nome do produto...">
        </label>
        <input type="submit" class="search-submit button" value="&#xf002" />
    </form>
    </div>
  </div>

  <?php

include_once './includes/_footer.php';
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