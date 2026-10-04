<?php 
    function estatisticasNumericas($numeros) {
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);
    sort($numeros);
    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        $meio1 = $numeros[($quantidade / 2) - 1];
        $meio2 = $numeros[$quantidade / 2];

        $mediana = ($meio1 + $meio2) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    return [
        "soma" => $soma,
        "media" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "mediana" => $mediana,
        "pares" => $pares,
        "impares" => $impares
    ];
}

$numeros = [10, 5, 8, 3, 7, 12, 4];
$resultado = estatisticasNumericas($numeros);

echo "Números: " . implode(", ", $numeros);

echo "<br>Soma " . $resultado["soma"];
echo "<br>Media " . $resultado["media"];
echo "<br>Maior valor " . $resultado["maior"];
echo "<br>Menor valor " . $resultado["menor"];
echo "<br>Mediana " . $resultado["mediana"];
echo "<br>Quantidade de pares " . $resultado["pares"];
echo "<br>Quantidade de ímpares " . $resultado["impares"];

?>