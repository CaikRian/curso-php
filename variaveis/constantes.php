<div class="titulo">Constantes</div>

<?php
//constante tem padrão por letras maiusculas divididas por underline
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>'. $TAXA_DE_JUROS.'!';
//define e const são a mesma coisa
const NOVA_TAXA=2.5;
echo '<br>'.NOVA_TAXA;

$valorVariavel=2.8;
//se quiser usar uma variavel como constante, o "const" não funciona, apenas o "define".

define('VELHA_TAXA', $valorVariavel);
echo '<br>'.VELHA_TAXA;
echo '<br>'.PHP_VERSION;
echo '<br>'.__LINE__;
echo '<br>'.__DIR__;



?>