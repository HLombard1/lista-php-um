
<?php
function gerarSenha($comprimento = 16) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*()_-+=[{]}';
    $max = strlen($caracteres) - 1;

    for ($i = 0; $i < $comprimento; $i++) {
        $senha .= $caracteres[random_int(0, $max)];
    }

    return $senha;
}
echo gerarSenha(16);
