<div class="titulo">Valor vs Referência</div>

<?php

$variavel='valor inicial';
echo $variavel;
//--atribuição por valor
$variavelValor=$variavel;
echo "<br> $variavelValor";
//cada variavel possui seu proprio armazenamento
$variavelValor='Novo valor';
echo "<br> $variavelValor";

//--atribuição por referencia
// & representa a referencia de uma variavel
$variavelReferencia=&$variavel;
$variavelReferencia='mesma referencia';
echo "<br> $variavel $variavelReferencia";
//economiza memória
//só é possível no php
?>