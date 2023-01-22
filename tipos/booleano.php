<div class="titulo">Tipo Booleano</div>

<?php 

echo TRUE; //convertido pra 1
echo '<br>';
echo FALSE; //convertido para nenhum numero

echo '<br>'. var_dump(true);
echo '<br>'. var_dump(false);
echo '<br>'. var_dump('false');
echo '<br>'. is_bool(false);
echo '<br>'. is_bool('true');//detecta se o valor é booleano

//criar regras de conversões

echo '<p>Regras:</p>';
echo '<br>'. var_dump((bool)0); //apenas zero é false
echo '<br>'. var_dump((bool)20);
echo '<br>'. var_dump((bool)-1);
echo '<br>'. var_dump((bool)0.0);
echo '<br>'. var_dump((bool)0.000001);
echo '<br>'. var_dump((bool)""); //false
echo '<br>'. var_dump((bool)"0"); //false
echo '<br>'. var_dump((bool)" "); //todo resto é true
echo '<br>'. var_dump((bool)"00");
echo '<br>'. var_dump((bool)"false");
?>