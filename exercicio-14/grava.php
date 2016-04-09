<?php

	if (isset($_POST['fala'])) {
		$fala_cumigu = $_POST['fala'];

		//Conversa que sera enviada
		$conversa = "<div style=\"text-align:left;\">";
		$conversa .= "<strong>User:</strong> $fala_cumigu";
		$conversa .= "</div>";

		// Gravando no arquivo de conversa
		$arquivo = fopen("conv.html", "a");
		fwrite($arquivo, $conversa);
		fclose($arquivo);
	
		// retorna para o index
		echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\">";
	} else{

		//retorna para o index sem nenhuma alteração
		header("location:index.php");
	}


?>