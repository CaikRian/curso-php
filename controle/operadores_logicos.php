<div class="titulo">Operadores Lógicos</div>

<?php 
echo '<p>V ou F</p><hr>';
var_dump(true);
echo '<br>';
var_dump(true && true);

var_dump(true);
echo '<br>';
var_dump(!true);//operador not

echo"<p>Tabela Verdade 'AND' (E) </p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false and false);
var_dump(false and true);//versão do &&
var_dump(true && 3>2);

echo"<p>Tabela Verdade 'OR' (OU) </p><hr>";
var_dump(true || true);
var_dump(false || true);
var_dump(false or false);//versão de ||
var_dump(true xor false);//versão exclusiva de ||


?>