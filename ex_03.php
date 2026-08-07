<?php

function mascararCpf($cpf){

$cpfmascarado = substr_replace ($cpf, '***.***.*', 0, 9);


}

$cpf = "123.456.789-10"

echo mascararCpf($cpf);
?> 