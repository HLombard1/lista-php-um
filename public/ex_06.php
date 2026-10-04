<?php

// Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes escalas.
// Crie uma função chamada converterTemperatura() que receba um valor, a escala de origem e a escala de destino.
// A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin.

function converterTemperatura($valor, $escala)
{
    echo "Valor e escala recebida: $valor $escala";
    $kelvin = 0;
    $fahrenheit = 0;
    $celsius = 0;

    if ($escala == "Cº") {
        $kelvin = $valor + 273;
        $fahrenheit = ($valor * 1.8) + 32;
    } elseif ($escala == "Kº") {
        $celsius = $valor - 273;
        $fahrenheit = ($valor - 273) * 1.8 + 32;
    } elseif ($escala == "Fº") {
        $celsius = ($valor - 32) / 1.8;
        $kelvin = $celsius + 273;
    }
    
    return [
        "kelvin" => $kelvin,
        "fahrenheit" => $fahrenheit,
        "celsius" => $celsius
    ];
}

$resultado = converterTemperatura(12, "Cº");

echo "<br>" . $resultado["kelvin"] . "<br>";
echo $resultado["fahrenheit"] . "<br>";
echo $resultado["celsius"] . "<br>";
