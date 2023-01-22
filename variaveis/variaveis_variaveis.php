<div class="titulo">Variáveis Variáveis</div>

<?php
//está transformando uma variavel em outra
$a='valorA';
$$a='valorAA';
echo "$a $$a";
echo "$a {$$a} ${$a} $valorA";

echo '<br>';

$epa='opa';
$opa='vish';
$vish="eitahh";
echo "$epa {$$epa} {$$$epa}";

?>