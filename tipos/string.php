<div class="titulo">Tipo String</div>

<?php 

echo 'Eu sou uma string';
echo '<br>';
var_dump("oi caik");//tamanho da string
//caracteres especiais contam espacos, como o ' ´ ';
echo '<br>';

//concatenação

echo "Olá" . ' Tudo bem?';
echo '<br>', "Estou bem.", " E voce?", '<br>';
echo "'Teste' " . '"Teste"' . ' \'Teste\'';
print("<br> Função print");
print "<br> função print";

//funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('minimizado');
echo '<br>' . ucfirst('só a primeira letra.');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . substr('Só uma parte mesmo', 7, 5);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');


?>