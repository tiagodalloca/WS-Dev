<?php
	include 'FileIndexer.class.php';

	if (isset($_POST['txtNome']) && isset($_POST['txtLink']))
	{
		$nome = $_POST['txtNome'];
		$link = $_POST['txtLink'];

		if ($nome == "")
			die("Preencha um link!!");

		try 
		{
			$indexer = new FileIndexer();
			$indexer->InsertFile($link, $nome);	
			$indexer->SaveFiles();

			header('Location: index.php');
		}
		catch (Exception $e)
		{
			echo "Só é permitido arquivos internos! (leia nosso tutorial)";
			return;
		}		
	}
?>

<html>
	<head>
		<title>Nova WS - Inclusão</title>		
		<meta charset="UTF-8">
	</head>

	<body>

		<style>

			br
			{
				clear: left;
			}

			form .label
			{
				float: left;
				width: 200px;
			}

			.label, input
			{
				margin-bottom: 5px;
				font: inherit;
			}

			input[type="submit"]
			{
				margin-top: 20px;
			}

		</style>

		<?php
			include 'cabecalho.php'
		?>

		<form action="incluir.php" method="POST">
			<label class="label">Nome do arquivo:</label><input type="text" name="txtNome"><br>
			<label class="label">Link para o arquivo: </label><input type="text" name="txtLink"><br><br>

			Ao enviar este link, <strong>você concorda com nossos </strong><a href="termo.php">termos de compromisso</a>.

			<br>
			<input type="submit" value="Adicionar Link">
		</form>
	</body>
</html>