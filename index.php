<?php

include 'FileIndexer.class.php';

$indexer = new FileIndexer();
$files = $indexer->GetFiles();
$names = $indexer->GetNames();

?>

<html>
	<head>
		<title>Nova WS - v1.0</title>
		<meta charset="UTF-8">
	</head>

	<body>
		<?php
			include 'cabecalho.php'
		?>

		<table border>
			<?php 
				$tam = $indexer->GetLength();
				for ($i=0; $i < $tam; $i++) 
				{ 
					echo "<tr>\n";
					echo "    <td style=\"background-color: black;\"><b>" . $names[$i] . "</b></td><td style=\"background-color: black;\"><a href='" . $files[$i] .  "'><b>Acessar/Baixar</b></a></td>\n";
					echo "</tr>\n";	
				}					
				
				$indexer = null;
			?>
		</table>
	</body>
</html>