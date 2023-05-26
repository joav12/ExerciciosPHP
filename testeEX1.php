<?php
	$url = "https://jsonplaceholder.typicode.com/todos/";

	for($i=0; $i<200; $i++){
		$data = file_get_contents($url.$i + 1 .'/');
		$usuario = json_decode($data);

		if($usuario->completed === true){
			echo 'O userID do usuário é: '.$usuario->userId. '<br>Seu id é: '.$usuario->id.'<br> seu título é: '.$usuario->title.'<br> E ele foi completo <hr>';

		}else{
			echo 'O userID do usuário é: '.$usuario->userId. '<br>Seu id é: '.$usuario->id.'<br> seu título é: '.$usuario->title.'<br> E ele não foi completo <hr>';
		}
	}
	
?>
