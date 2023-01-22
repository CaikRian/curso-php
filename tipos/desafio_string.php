<div class="titulo">Desafio String</div>

<?php 

//!AbcaBcaBc achar o 'abc'
//posição na string
echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcaBc', 'abc'). '<br>';

echo strpos(strtolower('!AbcaBcaBc'), strtolower('ABC'));

?>