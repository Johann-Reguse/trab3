
<?php
	$dadosJson = file_get_contents('db.json');
	$dadosJsonDecodificados = json_decode($dadosJson);
	if(isset($_POST['inserir'])) {
		echo "Livro enviado";
		$values = json_encode($_POST);
		file_put_contents('db.json', $values, FILE_APPEND);
	}
	if(isset($_POST['MostrarTudo'])) {
		print_r($dadosJson);	
	}
	if(isset($_POST['PesquisarLivro'])) {
		$msg = "Não foi encontrado";
		$isbn = $_POST['isbn'];
		print_r($msg);
		foreach ($dadosJsonDecodificados as $key => $value) {
	    		if($value == $isbn) {
        			$msg = 'Encontrado na lista!';
    			}
		}
		print_r($msg);
	}
?>
<a href='https://trab3.herokuapp.com'>
	<br>Voltar</a>
