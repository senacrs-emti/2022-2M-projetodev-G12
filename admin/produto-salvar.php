<?php 
include_once "../includes/_banco.php";



if ( isset ($_GET['id']) || !empty ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE ProdutoID = ".$id;
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
} else {
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
    $dados['Preco'] = '';
    $dados['CategoriaID'] = '';
    $dados['Prateleira'] = '';
    $dados['Corredor'] = '';
}

?>


<main>
    <h2 style="text-align: center;">Adminstracao do produtos</h2>
    <a href="produto-lista.php">Listagem</a>
    <hr>
    <form style="text-align: center;" action="produto-processa.php" method="post">
        <input type="text" value="salvar" name="acao">
        <input type="text" name="id" id="<?php echo $id;?>"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria" value="<?php echo $dados['CategoriaID'];?>"><br>
        <label for="corredor">Corredor:</label><br>
        <input type="text" id="corredor" name="corredor" value="<?php echo $dados['Corredor'];?>"><br>
        <label for="prateleira">Prateleira:</label><br>
        <input type="text" id="prateleira" name="prateleira" value="<?php echo $dados['Prateleira'];?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $dados ['Descricao'];?></textarea><br>
        <label for="nome">Preço:</label><br>
        <input type="text" id="preco" name="preco" value="<?php echo $dados['Preco'];?>"><br>
        <?php
        if (!empty($dados['Imagem']) ){
        ?>
        <img src="../contents<?php echo $dados['Imagem'];?>"/> 
        
        <?php
        }
        ?>

        <input type="file" name=foto>
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>




