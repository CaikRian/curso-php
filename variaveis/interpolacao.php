<div class="titulo">Interpolação = Interpretar</div>

<?php
//interpolar significa interpretar
$numero=10;
echo $numero;
echo'<br> $numero';//aspas simples não mostra resultado de variavel
echo"<br> $numero";//aspas duplas mostra resultado de variavel;
echo"<br> O valor é $numero";
echo'<br> O valor é $numero';

$obj='cadeira';

echo"<br> Eu quero 10 $obj";
echo"<br> Eu quero 10 {$obj}s";//chaves junta o resultado da varivel com alguma algum valor


?>