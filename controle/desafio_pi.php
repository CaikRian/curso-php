<div class="titulo">Desafio PI</div>

<?php 
echo pi();
$pi=3.14;
$piErrado=2.8;


if($pi - pi() <= 0.01){
    echo "<br> praticamente iguais";
}else{
    echo "<br> Diferentes";
}

if($pi - $piErrado <= 0.01){
    echo "<br> Praticamente iguais";
}else{
    echo "<br> Valor errado!";
}


?>