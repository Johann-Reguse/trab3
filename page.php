
<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	if(isset($_POST['inserir'])) {
		echo "Livro enviado";
		$values = $_POST;
		print_r($values);
		$values = json_encode($_POST);
		print_r($values);
		file_put_contents('db.json', $values, FILE_APPEND);
	}
	if(isset($_POST['MostrarTudo'])) {
		print_r($dadosJson);	
	}
	if(isset($_POST['PesquisarLivro'])) {
		$isbn = $_POST['isbn'];
		$path = $_POST['path'];
		print_r($path);
		foreach ($dadosJsonDecodificados as $key => $value) {
    			if($value == $isbn) {
        			$msg = 'Encontrado na lista!';
				print_r($msg);
				print_r($value);
				print_r($key);
				
			}
		}
    	}	
?>
<a href='https://trab3.herokuapp.com'>
	<br>Voltar</a>
