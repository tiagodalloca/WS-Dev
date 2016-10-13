<?php 
	session_start();
?>

<html>
	<head>
		<title>Nova WS - Tutorial</title>
		<meta charset="UTF-8">
	</head>

	<body>

		<?php
			include 'cabecalho.php'
		?>
		
		<p>Bem-vindo à Nova Ws! Para usar nossos serviços, siga os passos ilustrados abaixo:</p>

		<ol>
			<li>Selecione os arquivos que você quer compartilhar</li>
			<li>Crie uma pasta com o nome que preferir</li>
			<li>Usando o WinRAR, crie uma versão compactada da pasta que você criou</li>
			<li>Coloque o arquivo compactado dentro de sua pasta WEB (Z:\WEB)</li>
			<li>Vá para a página de inclusão (<a href="incluir.php" target="_blank">aqui</a>)</li>
			<li>No local indicado, coloque a URL para o seu arquivo, no segunte formato:<br>
				<b>uSEURA/MeuArquivo.rar</b></li>
			<li>Seu link ficará disponível para todos, na página inicial do sistema!</li>
		</ol>
	</body>
</html>