<?php

$i = 0;

function divisivel($numero){
    $resto3 =  $numero % 3;
    $resto5 = $numero % 5;

    if($resto3 === 0 && $resto5 !== 0){
        return ' Fizz <hr>';

    }else if($resto5 === 0 && $resto3 !== 0){
        return ' Buzz <hr>';

    }else if($resto3 === 0 && $resto5 === 0){
        return ' FizzBuzz <hr>';

    }else{
        return false;
    }
}

while($i<100){
$i++;


if(divisivel($i) === false){
    echo $i.'<hr>';

}else{
    echo divisivel($i);
}

}