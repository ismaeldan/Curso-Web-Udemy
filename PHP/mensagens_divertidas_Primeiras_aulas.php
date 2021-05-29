<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php

			// comentario de uma linha com "//"

			// padrão

			print 'Teste de impressão com print<br />';

			echo 'Teste de impressão com echo'; 

		?>

		<br />

		<?=

			# comentario de uma linha com "#"

			# Tag de impressão

			'Teste tag impressão'

		?>

		<br />

		<?	

			/* Comentario de multiplas linhas, em tudo que fica dentro do "/ * * /"

			Tag curta*/

			echo 'teste tag curta';

		?>

		<br />

		<%

			echo 'Asp Tag, não esta funcionando!!!';

		%>
		
	</body>
</html>