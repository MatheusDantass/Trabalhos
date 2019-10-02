<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head><title>Relatorio de Funcionarios</title>
<link href="https://fonts.google.com/specimen/Roboto" rel="stylesheet">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
   <center>
<a href="http://portal.estacio.br/" target="resource window"><img src="propaganda.png" width=250px heidth=250px></a>
   <div class="container">
   <br>
   <br>
<?php

$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];
$opcao = $_REQUEST['pergunta'];

if ($opcao == "Não"){
echo "<table border='1' >";
echo "<tr><th> Nome </th>";
echo "<th> Idade </th>";
echo "<th>Filhos</th></<tr>";
echo "<tr><td>$nome</td>";
echo "<td> $idade </td><td>";
echo "Não Possui Filhos;";
}else{
echo "<table border='1'>";
echo "<tr><th> Nome </th>";
echo "<th> Idade </th>";
echo "<th>Filhos</th></<tr>";
echo "<tr><td>$nome</td>";
echo "<td> $idade </td><td>";
foreach($_POST['filhos'] as $key => $value)
       {
          $dados =   $_POST["filhos"][$key]." - ".$_POST["idadef"][$key]." anos; ";
          echo "$dados";
       }
      }
       echo"</td></tr></table>";
?>
</div>
<footer>
<h4 class="fonte">Todos os Direitos Reservados - 2019</h4>
</footer>
</center>
</body>
</html>