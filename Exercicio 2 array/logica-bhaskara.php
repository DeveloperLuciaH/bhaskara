<?php
include 'funcao.php';
echo '<pre>';

// 06 inputs
$a_inicial = $_POST['valorA_ini'];
$a_final = $_POST['valorA_fim'];
$b_inicial = $_POST['valorB_ini'];
$b_final = $_POST['valorB_fim'];
$c_inicial = $_POST['valorC_ini'];
$c_final = $_POST['valorC_fim'];

$a_array = array();
$b_array = array();
$c_array = array();

// estrutura: para (valor inicial, valor final ou teste boleano, incremento {lógica})

for ($i = $a_inicial; $i <= $a_final ; $i++) {
    $a_array[] = $i; // variável que armazena os resultados do array, de cada volta
}
for ($i = $b_inicial; $i <= $b_final; $i++) {
    $b_array[] = $i;
}

for ($i = $c_inicial; $i <= $c_final; $i++) {
    $c_array[] = $i;
}

var_dump($a_array);
var_dump($b_array);
var_dump($c_array);

$resultados = array();

foreach ($a_array as $chave_a => $array_a) {
    foreach ($b_array as $chave_b => $array_b) {
        foreach ($c_array as $chave_c => $array_c) {
            $result_temp = calc_bhaskara($array_a, $array_b, $array_c);
            if($result_temp != NULL && $result_temp['x1'] != NULL && $result_temp['x2'] != NULL){
                $resultados[] = $result_temp;
            }
        }
    }
}

echo "Resultado: <br>";
var_dump($resultados);

 ?>