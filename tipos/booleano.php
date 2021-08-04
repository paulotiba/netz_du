<div class="titulo">Tipo Booleano</div>


<?php
 echo true;
 echo '<br>';
 echo false;


 echo '<br>' . var_dump(true);
 echo '<br>' . var_dump(false);
 echo '<br>' . var_dump('false');
 echo '<br>' . is_bool(false);
 echo '<br>' . is_bool('true');

//  fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0);
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) " ");


echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump(!"false");

// float para int

echo '<p>Float para int</p>';
var_dump((int) 6 . 8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int)round(2.8));


// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "2+5");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");
