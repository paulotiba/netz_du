<div class="titulo">Map & Filter.</div>


<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $nota) {
    $notasFinais[] = round($nota);
}

print_r($notasFinais);

echo '<br>';

$notasFinais2 = array_map('round',  $notas);
print_r($notasFinais2);



$apenasOsAprovados = [];

foreach($notas as $nota) {
    if($nota >= 7){
        $apenasOsAprovados[] = $nota;
    }
}

echo '<br>';
print_r($apenasOsAprovados);


function aprovados($notas) {
    return $notas >= 7;
}


echo '<br>';
$apenasOsAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasOsAprovados2);


function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<hr>';
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);