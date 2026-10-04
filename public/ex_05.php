<?php function analisarTexto($texto) {

    $quantidadeCaracteres = mb_strlen($texto);

    $palavras = explode(" ", $texto);

    $palavras = count($palavras);

    return [
        "quantidade de caracteres" => $quantidadeCaracteres,
        "palavras" => $palavras
    ];

    
}

$texto = "o gugupro é lindo <br>"; 
$resultado =  analisarTexto($texto);
echo $texto;
echo "quantidade de caracteres: " . $resultado["quantidade de caracteres"] . "<br>";
echo "palavras: " . $resultado["palavras"] . "<br>";

?>