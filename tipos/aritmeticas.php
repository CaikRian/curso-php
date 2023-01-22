<div class="titulo">Operações Aritméticas</div>

<?php 
//variavel/numero é o operando
// operador é +-/*
echo 1+1, '<br>'; //soma
var_dump(1+1);
echo '<br>';
echo 1+2.5, '<br>';
echo 10-2, '<br>';
echo 2*5, '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>'; //função para deixar a divisão inteira
echo round(7/4), '<br>'; //função para arredondar o valor da divisão
echo 7%4, '<br>';
echo 4**2, '<br>';

echo '<p>Precedência de operadores</p>';
echo 2+3*4, '<br>';
echo (2+3)*4, '<br>';
echo 2+3*4**2, '<br>';
echo ((2+3)*4)**2, '<br>';

?>