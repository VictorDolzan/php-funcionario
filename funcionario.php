<?php

include('Calculadora.php');
include('Funcionarios.php');

$cpf = $_POST['cpf'];

$calculador = new Calculadora();
$funcionarios = new Funcionarios();

$func = $funcionarios->find($cpf);

echo $func['nome'];
?>