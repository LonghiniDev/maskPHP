<?php

include("class/StringUtils.php");


$cpf = "11122233344";
$telefone = "44988473908";
$data = date('d/m/Y');

$cpf = StringUtils::Mask($cpf, "###.###.###-##");
$telefone = StringUtils::Mask($telefone, "(##) #####-####");
$data = StringUtils::Mask($data, "##/##/####");

echo $cpf;
echo $telefone;
echo $data;