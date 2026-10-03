
<?php

function analisarProdutos($produtos, $produtoEscolhido)
{
    $maisCaro = null;
    $maisBarato = null;
    $soma = 0;
    $encontrado = false;

    foreach ($produtos as $produto) {
        $soma += $produto["preco"];

        if ($maisCaro == null || $produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }
        if ($maisBarato == null || $produto["preco"] < $maisBarato["preco"]) {
            $maisBarato = $produto;
        }

        if ($produto["nome"] == $produtoEscolhido) {
            $encontrado = true;
        }
    }

    $media = $soma / count($produtos);

    return [
        "maisCaro" => $maisCaro,
        "maisBarato" => $maisBarato,
        "media" => $media,
        "encontrado" => $encontrado
    ];
}

$produtos = [
    ["nome" => "Leite", "preco" => 12.90],
    ["nome" => "Batata", "preco" => 8.50],
    ["nome" => "uva", "preco" => 67.20]
];
$produtoEscolhido = $_POST["produto"] ?? null;

if ($produtoEscolhido != null) {

    $resultado = analisarProdutos($produtos, $produtoEscolhido);

    echo "<Resultado";

    if ($resultado["encontrado"]) {
        echo "<br>Tem $produtoEscolhido </br>";
    }
    echo "<br>Produto mais caro "
        . $resultado["maisCaro"]["nome"]
        . number_format($resultado["maisCaro"]["preco"])
        . "</br>";

    echo "<br>Produto mais barato "
        . $resultado["maisBarato"]["nome"]
        . number_format($resultado["maisBarato"]["preco"])
        . "</br>";

    echo "<br>Media dos preço "
        . number_format($resultado["media"])
        . "</br>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <form method="POST">

        <label for="produto">Escolha um produto:</label>
        <br>

        <select name="produto" id="produto">
            <?php foreach ($produtos as $produto): ?>
                <option value="<?php echo $produto["nome"]; ?>">
                    <?php echo $produto["nome"]; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>