<?php

class Calculadora
{
    public function soma($x, $y)
    {
        return $x + $y;
    }

    public function subtracao($x, $y)
    {
        return $x - $y;
    }

    public function divisao($x, $y)
    {
        if($y == 0)
        {
            return 0;
        }        
        return $x / $y;        
    }

    public function multiplicacao($x, $y)
    {
        return $x * $y;
    }

    public function potencia($x, $y)
    {
        if($y < 0)
        {
            $x = 1 / $x;
            $y = $y * -1;
        }
    
        $total = 1;
        for($i = 0; $i < $y; $i++)
        {
            $total *= $x;
        }
        return $total;
    }

}

?>