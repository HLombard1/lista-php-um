<?php

/*Uma loja virtual oferece descontos conforme o valor da compra.
Crie uma função chamada calcularDesconto() que receba o valor total da compra
e aplique as seguintes regras:
● Até R$ 100,00: sem desconto;
● Acima de R$ 100,00: 10%;
● Acima de R$ 500,00: 20%;
● Acima de R$ 1.000,00: 30%.
Retorne o valor original, o desconto aplicado e o valor final da compra.*/

function calcularDesconto($valorCompra) {
    if ($valorCompra > 1000.00) {
        $desconto = $valorCompra * 0.3;
    } elseif ($valorCompra > 500.00) {
        $desconto = $valorCompra * 0.2;
    } elseif ($valorCompra > 100.00) {
        $desconto = $valorCompra * 0.1;
    } else {
        $desconto = 0;
    }

    $valorFinal = $valorCompra - $desconto;

    return [
        "valorOriginal" => $valorCompra,
        "desconto" => $desconto,
        "valorFinal" => $valorFinal
    ];
}

$valor = 345.12;

$resultado = calcularDesconto($valor);

echo "Valor original: R$ " . $resultado["valorOriginal"] . "<br>";
echo "Valor do desconto: R$ " . $resultado["desconto"] . "<br>";
echo "Valor final: R$ " . $resultado["valorFinal"] . "<br>";