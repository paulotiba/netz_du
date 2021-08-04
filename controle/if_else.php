<div class="titulo">If e Else</div>


<?php

if (true) {
    echo "serei impresso <br>";
    echo "serei impresso novamente";
}

echo ' <br> Segunda Parte : <br>' .  date('D' . ' M'  . ' Y'), '<br>';


if (false) {
    echo "Verdadeiro Parte A<br>";
    echo "Verdadeiro Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if (false) {
    echo "Passo A<br>";
} else if (true) {
    echo "Passo B<br>";
} else if (false) {
    echo "Passo C<br>";
} else if (false) {
    echo "Passo D<br>";
} else if (false) {
    echo "Passo E<br>";
} else {
    echo "Ultimo Passo<br>";
}

echo "Fim<br>";
