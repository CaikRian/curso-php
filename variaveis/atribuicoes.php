<div class="titulo">Atribuições</div>

<?php

$title='Atribuições';

$numero=10;
echo '<br>'.$numero;
$numero=$numero-1;
echo '<br>'.$numero;
$numero=$numero+1.5;
echo '<br>'.$numero;
$numero--;//decremento de variavel ($numero-1)
echo '<br>'.$numero;
$numero++;
echo '<br>'.$numero;//incremento de variavel ($numero+1)
$numero-=5;
echo '<br>'.$numero;
$numero+=5;
echo '<br>'.$numero;
$numero**=2;
echo '<br>'.$numero;
$numero.=4;//isso é apenas uma concatenação
echo '<br>'.$numero;
//com string
$texto='textinho';
echo '<br>'.$texto;
$texto=$texto.' qualquer';
echo '<br>'.$texto;
$texto.=' de verdade';
echo '<br>'.$texto;

//caso não tenha valor na variavel
$varexiste='Eu existo';
$valor=$varexiste??'Ela não existe';//isso aparece caso não tenha valor inicial
echo '<br>'.$valor;



?>