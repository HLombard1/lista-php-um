<?php


function ordenarNomes($nomes){
    $partes = array_map('trim' ,explode(",", $nomes));
    sort($partes, SORT_LOCALE_STRING);
    return $partes;
}

$nomesUsuario = "Henrique,Joonas,Kaleu,Belford,Icaro,Manuel";

$resultado = ordenarNomes($nomesUsuario);

echo implode(",",$resultado);
