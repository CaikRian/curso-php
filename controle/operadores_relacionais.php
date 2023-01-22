<div class="titulo">Operadores Relacionais</div>

<?php

//var_dump() ver o tipo da variavel
var_dump(1==1);
var_dump(1>1);
var_dump(1>=1);
var_dump(4<23);
var_dump(1!=1);
var_dump(1<=7);
var_dump(1<>1);

var_dump(11=='11');//será true pq não levará em conta se é string ou int
var_dump(11==='11');//será false pq ele irá ver se eles são do msm tipo.

echo "<p>Relacionais no If/Else</p><hr>";
$idade=15;
if($idade<18){
    echo "menor de Idade $idade <br>";
}else if($idade<65){
    echo "Adulto<br>";
}else{
    echo "Terceira idade";
}

echo "<p>Spaceship</p><hr>";
var_dump(500<=>3);
var_dump(50<=>50);
var_dump(5<=>50);



?>
<style>
    p{
        margin-bottom: 0;
    }
    hr{
        margin-top:0 ;
    }
</style>