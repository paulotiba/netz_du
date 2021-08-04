<div class="titulo">Operadores Relacionais</div>


<?php
// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(4  < 23);
// var_dump(1 != 1);
// var_dump(1 <> 1);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p><strong>Relacionais no if/Else</strong></p><hr>";


$idade = 76;
if($idade < 18) {
    echo "Menor de idade  = $idade anos<br>";
} else if ($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p><strong>Spaceship</strong></p><hr>";
var_dump(500 <=> 3 );
var_dump(50 <=> 50 );
var_dump(5 <=> 50 );


echo "<p><strong>Valore podem ser V ou F</strong></p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
var_dump( '<br>' ,pi());
echo pi();



?>

<style>
p {
    margin-bottom: 0px;
    color: red;
}

hr {
    margin-top: 0px;
    color: orange;
}

</style>