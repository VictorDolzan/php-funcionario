<?php

include('Calculadora.php');
include('Funcionarios.php');

$id = $_POST['id'];

$calculador = new Calculadora();
$funcionarios = new Funcionarios();

$func = $funcionarios->find($id);

echo $func['nome'];
?>