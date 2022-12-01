<?php 
include_once "../includes/_banco.php";
include_once "_valida.php";

$sql = "SELECT * from produtos WHERE Ativo = true";


$resultado = mysqli_query($conn, $sql);

$total = mysqli_num_rows($resultado);

?>
<main>
<h2 style="text-align: center"> Administração de categorias</h2>

<a href="produto-salvar.php">Inserir</a>
<hr>
<table border= "1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Preço</th>
    <th>Prateleira</th>
    <th>Corredor</th>
    <th>Imagem</th>
    <th>CategoriaID</th>
    <th>Ações</th>
</tr>

<?php

if ($resultado){

 while ($dado = mysqli_fetch_array($resultado)) {
  
?>
  
<tr>
<td><?php echo $dado ["ProdutoID"] ?></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Nome'];?></a></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Descricao'];?></a></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Preco'];?></a></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Prateleira'];?></a></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Corredor'];?></a></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Imagem'];?></a></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['CategoriaID'];?></a></td>
<td><a href="produto-processa.php?acao=excluir&id=<?php echo $dado['ProdutoID'];?>">Excluir</a></td>
</tr>

<?php
 }

} else {
?>
<tr>
<td colspan="3">Resultados não encontrados</td>
</tr>
<?php
}
?>
<tr>
<td colspan="3">Total de registros: <?php echo $total;?></td>
</tr>

</table>

</main>
