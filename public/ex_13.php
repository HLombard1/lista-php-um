<?php

function criptografarMensagem($texto) {
    $alfabeto = "abcdefghijklmnopqrstuvwxyz";
    $deslocamento = 3;
    $resultado = "";

    $texto = mb_strtolower($texto, "UTF-8");

    for ($i = 0; $i < mb_strlen($texto, "UTF-8"); $i++) {
        $letra = mb_substr($texto, $i, 1, "UTF-8");
        $posicao = strpos($alfabeto, $letra);

        if ($posicao !== false) {
            $novaPosicao = ($posicao + $deslocamento) % 26;
            $resultado .= $alfabeto[$novaPosicao];
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto) {
    $alfabeto = "abcdefghijklmnopqrstuvwxyz";
    $deslocamento = 3;
    $resultado = "";

    for ($i = 0; $i < mb_strlen($texto, "UTF-8"); $i++) {

        $letra = mb_substr($texto, $i, 1, "UTF-8");

        $posicao = strpos($alfabeto, $letra);

        if ($posicao !== false) {
            $novaPosicao = ($posicao - $deslocamento + 26) % 26;
            $resultado .= $alfabeto[$novaPosicao];
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}


$mensagem = "o rato roeu a roupa do Ícaro";

$criptografada = criptografarMensagem($mensagem);

$descriptografada = descriptografarMensagem($criptografada);

echo "<br> tetxo original: " . $mensagem;
echo "<br> texto criptografado: " . $criptografada;
echo "<br> texto descriptografado: " . $descriptografada;
