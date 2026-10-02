<?php

function mascararCpf($cpf){

$cpfmascarado = substr_replace ($cpf, '***.***.*', 0, 9);

return $cpfmascarado;

}

$cpf = "123.456.789-10";

echo mascararCpf($cpf);
?> 