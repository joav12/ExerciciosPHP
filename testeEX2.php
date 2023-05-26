<?php
	$url = "https://jsonplaceholder.typicode.com/todos/";
    $data = file_get_contents($url. 1 .'/');
	$usuario = json_decode($data);
    
    if($usuario->completed === true){
        echo '<form method="post">
    <h2>Formulário do userId '.$usuario->userId.'</h2>
    <h3>Id do usuário: '.$usuario->id.'</h3>
    Titulo: <textarea id="w3review" name="w3review" rows="4" cols="50">'.$usuario->title.'</textarea> <br>
    Completado?: <input type="checkbox" checked> <br>
    <input type=submit value="OK">
    </form>';

    }else{
        echo '<form method="post">
    <h2>Formulário do userId '.$usuario->userId.'</h2>
    <h3>Id do usuário: '.$usuario->id.'</h3>
    Titulo: <textarea id="w3review" name="w3review" rows="4" cols="50">'.$usuario->title.'</textarea> <br>
    Completado?: <input type="checkbox"> <br>
    <input type=submit value="OK">
    </form>';
    }
	
?>
