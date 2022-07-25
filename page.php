
<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson, true);
				
	if(isset($_POST['inserir'])) {
		echo "Livro enviado";
		$values = $_POST;
		$dadosJsonDecodificados["Livro"][] = $values;
		$fp = fopen('db.json', 'w');
		fwrite($fp, json_encode($dadosJsonDecodificados));
		fclose($fp);
	}

	if(isset($_POST['MostrarTudo'])) {
		print_r($dadosJson);	
	}
	
	if(isset($_POST['PesquisarLivro'])) {
		$isbn = $_POST['isbn'];
		$msg = 'Não encontrado';
		foreach ($dadosJsonDecodificados[0] as $key => $value) {
			if($dadosJsonDecodificados[0][$Key] == $isbn) {
        			$msg = 'Encontrado na lista!';	
				print_r($msg);
			}
			print_r($dadosJsonDecodificados[0]);
		}
		print_r($msg);
    	}	
?>

