<?php


class Teste{
    public function calcular()
    {
        //dados entrada
        $this->a = null;
        $this->b = null;
        $this->c = null;
        //dados saída
        $this->ResultadoDelta = null;
        $this->x1 = null;
        $this->x2 = null;
    }
}



$dados = new Teste;
$dados->a = 1;
$dados->b = 12;
$dados->c = -13;
var_dump($dados);



class CalculoDelta
{
    //método
    public function calc_delta()
    {
        $this->delta_ret = ($this->b_vlr * $this->b_vlr) - (4 * $this->a_vlr * $this->c_vlr);
    }
}

class CalculoX1X2
{
    //métodos
    public function calc_x1()
    {
        $this->x1_ret = (-$this->b_vlr + sqrt($this->delta_vlr)) / (2 * $this->a_vlr);
    }

    public function calc_x2()
    {
        $this->x2_ret = (-$this->b_vlr - sqrt($this->delta_vlr)) / (2 * $this->a_vlr);
    }
}
# -------------------------------------------
echo '<pre>';
# -------------------------------------------
//instanciar
// $dados = new Teste;
$delta = new CalculoDelta;
$xs = new CalculoX1X2;
# -------------------------------------------
// setando valores
$delta->a_vlr = $dados->a;
$delta->b_vlr = $dados->b;
$delta->c_vlr = $dados->c;
//seta o método para exibir o resultado
$delta->calc_delta();
$dados->ResultadoDelta = $delta->delta_ret;
# -------------------------------------------
//setando valores para calc x1 e x2
$xs->a_vlr = $dados->a;
$xs->b_vlr = $dados->b;
$xs->delta_vlr = $dados->ResultadoDelta;
//seta os métodos para exibir os resultado
$xs->calc_x1();
$xs->calc_x2();
$dados->x1 = $xs->x1_ret;
$dados->x2 = $xs->x2_ret;
# -------------------------------------------
//exibindo resultados 
var_dump($dados->a);
var_dump($dados->b);
var_dump($dados->c);
var_dump($dados->ResultadoDelta);
var_dump($dados->x1);
var_dump($dados->x2);










?>