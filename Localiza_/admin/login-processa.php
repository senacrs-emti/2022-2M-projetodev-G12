<?php

session_start();

include_once '../includes/_banco.php';

$acao = $_REQUEST['acao'];
print($acao);
switch ($acao) {



    case 'logoff':

    $_SESSION ['LOGIN'] = '';

    unset($_SESSION['LOGIN']);

    header ('location: ./login.php?msg=3');

    break;

 

case 'login';

        $nome = $_POST['nome'];

        $senha = $_POST ['senha'];


    print($nome);
    print($senha);
    $sql = "SELECT * FROM usuarios WHERE Nome = '" .$nome. "' AND Senha = '".$senha."'";

    $resultado = mysqli_query($conn,$sql);

    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);



    if (!empty($dados)) {

       

        $_SESSION['LOGIN'] = array('nome' =>$dados['Nome']);

        header('location: ./produto-salvar.php');

   

    }else{

        header('location: ./login.php?msg=1');

    }



    break;



}

?>