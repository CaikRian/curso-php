<div class="titulo">Básico de Variáveis</div>

<?php 

$numeroA = 13;

echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a=3;
$b=6.5;
$soma=$a+$b;
echo '<br>';
echo $soma;
echo '<br>';
echo isset($soma);//coloca valor na variavel
echo '<br>';
unset($soma);//limpa a variavel
echo '<br>';
var_dump($soma);

echo '<br>';

$variavel=10;
echo '<br>'.$variavel;

$variavel="Sou uma string";

echo '<br>'.$variavel;
//php não precisa colocar o tipo da variavel


// Nomes de variáveis

$var='valido';
$var2='valido';
$VAR3='valido';
$_var_4='valido';
$vâr5='valido, mas não recomendado';
//$6var='invalido';
//$%var7='invalido';
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);

?>