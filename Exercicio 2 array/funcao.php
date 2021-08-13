<?php 

function calc_delta($a_valor, $b_valor, $c_valor){
    $delta_retorno = ($b_valor * $b_valor) - (4 * $a_valor * $c_valor);

    return $delta_retorno;

}


function calc_x1($a_valor, $b_valor, $delta_valor){
    $x1_retorno = (-$b_valor + sqrt($delta_valor)) / (2 * $a_valor);

  return $x1_retorno;

} 

function calc_x2($a_valor, $b_valor, $delta_valor)
{
  $x2_retorno = (-$b_valor - sqrt($delta_valor)) / (2 * $a_valor);

  return $x2_retorno;
}


function calc_bhaskara($a_valor, $b_valor, $c_valor)
{
  if($a_valor == 0) {

    return NULL;
  }

  // Seta um array na variável
  $retorno = array();
  // Seta a função delta dentro de uma variáveç array
  $retorno['delta'] = calc_delta($a_valor, $b_valor, $c_valor);

  if($retorno['delta'] < 0)   {
      $retorno['x1'] = NULL;
      $retorno['x2'] = NULL;

      return $retorno;

    } else if($retorno['delta'] == 0) {
        $retorno['x1'] = calc_x1($a_valor, $b_valor, $retorno['delta']);
        $retorno['x2'] = NULL;
    
        return $retorno;
      } else {
        $retorno['x1'] = calc_x1($a_valor, $b_valor, $retorno['delta']);
        $retorno['x2'] = calc_x2($a_valor, $b_valor, $retorno['delta']);
      }
    
      $delta = $retorno['delta'];
      $x1 = $retorno['x1'];
      $x2 = $retorno['x2'];
      connect_and_write_db($a_valor, $b_valor, $c_valor, $delta, $x1, $x2);
    
      return $retorno;
    }
    
    function get_insert_sql($a_valor, $b_valor, $c_valor, $delta, $x1, $x2)
    {
      $query = "INSERT INTO bhaskara_php (a, b, c, delta, x1, x2) VALUES ('$a_valor','$b_valor','$c_valor','$delta','$x1', '$x2')";
      return($query);
    }
    
    function connect_and_write_db($a_valor, $b_valor, $c_valor, $delta, $x1, $x2){
      $query = get_insert_sql($a_valor, $b_valor, $c_valor, $delta, $x1, $x2);
      $resultado = mysqli_query(mysqli_connect('localhost', 'root', '', 'bhaskara'), $query);
        return $resultado;
    }
