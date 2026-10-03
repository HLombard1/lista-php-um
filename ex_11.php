<?php
function formatarTexto($texto){
    $maiusculo=strtoupper($texto);
    $minusculo= strtoupper($texto);
    $primeiraMaiuscula = ucwords(strtolower($texto));
    $quantidadeCaracteres= strlen($texto);
    return[
        "maiusculo" =>$maiusculo,
        "minusculo" =>$minusculo,
        "primeiraMaiuscula" =>$primeiraMaiuscula,
        "quantidadeCaracteres"=>$quantidadeCaracteres
    ];
    
}
$texto = "Professor Ícaro tenha piedade";

$resultado = formatarTexto($texto);

echo "Maiúsculo: " . $resultado["maiusculo"] . "<br>";
echo "Minúsculo: " . $resultado["minusculo"] . "<br>";
echo "Primeira letra maiúscula: " . $resultado["primeiraMaiuscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidadeCaracteres"];
