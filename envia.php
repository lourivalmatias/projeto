<!DOCTYPE html>

<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];


echo "Nome: ".$nome ."<br>";
echo "Email: ".$email ."<br>";
echo "Senha: ".$senha ."<br>";
echo "Confirmação: ".$confirmar_senha ."<br>";
/*
echo "Senha: ".$_POST["senha"]."<br>";
echo "Email: ".$_POST["email"]."<br>";
echo "Sexo: ".$_POST["sexo"]."<br>";
echo "Telefone: ".$_POST["telefone"]."<br>";
echo "Celular: ".$_POST["celular"]."<br>";
echo "Endereço: ".$_POST["endereco"]."<br>";
echo "Cidade: ".$_POST["cidade"]."<br>";
echo "Estado: ".$_POST["estado"]."<br>"
echo "Senha: ".$_POST["senha"]."<br>";
echo "Mensagem: ".$_POST["mensagem"]."<br>";
*/

?>
</body>
</html>