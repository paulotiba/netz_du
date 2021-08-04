<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//  concatenação!!
echo('<br>'. "Nós também" . 'Somos');
echo  '<br>', "Também aceito", "virgulas";

echo '<br>';
echo "'Teste'" . '"Teste"' . '\'Teste \'' . "\"Teste\"" . "\\" . "\n";


print("<br>Também existe a função print");
print "<br>Também existe a funçào print";

// algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MAXIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu também!!!');
echo '<br>' . substr('Só uma parte da string mesmo', 8, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');





