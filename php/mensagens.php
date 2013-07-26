<?php require_once("conn.php"); ?>
<h1>Mensagens</h1>

<div id="mensagens">
	<?php
	// Buscamos e exibimos as mensagens já contidas no banco de dados
	$query = mysql_query("SELECT * FROM mensagens ORDER BY id DESC");
	while($mensagem = mysql_fetch_object($query)) {
		echo "<strong>" . $mensagem->nome . "</strong> disse: <em>" . $mensagem->mensagem . "</em><br />";
	}
	?>
</div>