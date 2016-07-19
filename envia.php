<!DOCTYPE html>
<html lang="pt-BR">
<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<?php


	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmar_senha = $_POST['confirmar_senha'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];


	?>
	<br /><br />
	<div class="container">
		<table border="1" class="table table-hover">
			<thead>
				<tr>
					<th colspan="2">DADOS CADASTRADOS</th>      
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Nome</th>
					<td><?php echo "$nome"; ?></td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><?php echo "$email"; ?></td>
				</tr>
				<tr>
					<th>Senha</th>
					<td><?php echo "$senha"; ?></td>
				</tr>
				<tr>
					<th>Sexo</th>
					<td><?php echo "$sexo"; ?></td>
				</tr>
				<tr>
					<th>Telefone</th>
					<td><?php echo "$telefone"; ?></td>
				</tr>
				<tr>
					<th>Celular</th>
					<td><?php echo "$celular"; ?></td>
				</tr>
				<tr>
					<th>Endere&ccedilo</th>
					<td><?php echo "$endereco"; ?></td>
				</tr>
				<tr>
					<th>Cidade</th>
					<td><?php echo "$cidade"; ?></td>
				</tr>
				<tr>
					<th>Estado</th>
					<td><?php echo "$estado"; ?></td>
				</tr>
			</tbody>
		</table>

		<?php
		echo "<script>alert(\"Cadastro enviado com sucesso!\")</script>";
		?>
	</div>


</body>
</html>