<?php


function calcularMedia($notas){ 
    $soma=0;
    foreach($notas  as $nota){
        $soma += $nota;

    }


    $media = $soma /3;

    $maior =max($notas);

    $menor=min($notas);

    if($media >= 7){
      $resultadoFinal = 'aprovado';
    }elseif($media < 7 && $media > 5){
      $resultadoFinal = 'recuperação';
    }else{
        $resultadoFinal = "reprovado";
    }

    return [
        "media" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "resultado"=> $resultadoFinal
    ];

}
$notas =[4.3, 8.7, 9.4];
$resultado = calcularMedia($notas);
echo "Media " . $resultado["media"] . "<br>";
echo "Maior nota" . $resultado["maior"] . "<br>";
echo "Menor nota " . $resultado["menor"] . "<br>";
echo "Voce foi " . $resultado["resultado"] . "<br>";

?>