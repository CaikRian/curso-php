<div class="titulo">Conversões</div>

<?php 

echo is_int(PHP_INT_MAX);

//int para float

echo '<br>';
var_dump(PHP_INT_MAX+1);
echo '<br>';
var_dump(1+1.0);
echo '<br>';
var_dump((float)3);

//float para int

echo '<p>Float para int</p>';
var_dump((int)6.8);
echo '<br>';
var_dump(intval(2.8,10)); //transformando base 10 em inteiro
echo '<br>';
var_dump((int)round(2.8));//arredonda pra cima

//operações com string

echo '<p>Operações com string</p>';

var_dump(3+"2");//muitas linguagens n aceitam numero string na soma
echo '<br>';
var_dump("3"+2);
echo '<br>';
var_dump("3". 2);//concatenou os dois em string
echo '<br>', is_string("3". 2);
//echo '<br>', is_string("3"+ 2);
echo '<br>';
//var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco"); //leu o primeiro numero string e somou
echo '<br>';
//var_dump(1 + "cinco 5"); //não soma, pois o primeiro string n é numero
echo '<br>';
var_dump((1+"2.2"));
echo '<br>';
var_dump(1+"-3.2e2");
echo '<br>';
var_dump((int)"10.5");//convertido para int
echo '<br>';
var_dump((float)"10.5");//convertido para float
?>