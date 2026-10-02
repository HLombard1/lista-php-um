<?php

function analisarNumero($numero) {

    

    if ($numero % 2 == 0) {
        $parImpar = "Par";
    } else {
        $parImpar = "Ímpar";
    }

    $primo = true;

    if ($numero <= 1) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = true;
    } else {
        $perfeito = false;
    }

    return [
        "par_impar" => $parImpar,
        "primo" => $primo,
        "perfeito" => $perfeito
    ];
}


$resultado = analisarNumero(347);

echo "347 <br>";

echo "Par ou ímpar: " . $resultado["par_impar"] . "<br>";

if ($resultado["primo"]) {
    echo "Primo: Sim<br>";
} else {
    echo "Primo: Não<br>";
}

if ($resultado["perfeito"]) {
    echo "Perfeito: Sim<br>";
} else {
    echo "Perfeito: Não<br>";
}

?>