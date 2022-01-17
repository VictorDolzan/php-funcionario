<?php

class Funcionarios
{
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios = [
            ['id' => 4, 'nome' => 'João', 'salario' => 1500, 'cpf' => '15668798735'],
            ['id' => 21, 'nome' => 'Jose', 'salario' => 1230.50, 'cpf' => '15668798789'],
            ['id' => 34, 'nome' => 'Maria', 'salario' => 1678.54, 'cpf' => '15668798768']
        ];
    }

    public function all()
    {
        return $this->funcionarios;
    }

    public function find($cpf)
    {
        foreach($this->funcionarios as $func)
        {
            if($func['cpf'] == $cpf)
            {
                return $func;
            }
         }
        return null;     
    }
}

?>