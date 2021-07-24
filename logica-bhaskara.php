<?php

function bhaskara($conexao){
    $a = $_POST['valorA'];
    $b = $_POST['valorB'];
    $c = $_POST['valorC'];
    $delta = ($b * $b) - (4 * $a * $c);
    if($delta < 0){
        echo " <div class='container' id='btn-close-all' >
                    <p class='alert alert-danger p-3 mt-5 text-center' > O valor de delta é negativo! </p> 
                </div>";
    } else{
        echo " <div class='container' id='btn-close-all'>
                 <p class='alert alert-success p-3 mt-5 text-center'> 
                 O valor de delta é maior que zero! <br>";
    
                $x1 = (-$b + sqrt($delta)) / (2  * $a ); 
                $x2 = (-$b - sqrt($delta)) / (2  * $a ); 
                
                echo "X1: $x1 <br> X2: $x2";
                echo " <br> Valor de Delta: $delta  
                </p> </div>";
    
        $insert ="INSERT INTO bhaskara_php VALUES ('0', '$a', '$b', '$c', '$delta', '$x1', '$x2')";    
        $resultado_insert = mysqli_query($conexao, $insert); 
            
        return $resultado_insert;
    }
}

?>    