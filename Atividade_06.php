<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folha de Pagamento</title>
</head>

<body>

    <form method="POST" action="">

        <label>Digite quantidade de salários minimos: </label>
        <input type="text" name="sal">
        <button type="submit" name="calcular">CALCULAR</button>

    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $quant = $_POST['sal'];
        $salario_minimo = 1621.00; //Valor do salario minimo 
        $salario_bruto = $quant * $salario_minimo;

        //Verificar enquadramento do salario.

        if ($salario_bruto <= 2430.00) {
            $aliquota = 0.075;
        } elseif ($salario_bruto <= 3240.00) {
            $aliquota = 0.09;
        } elseif ($salario_bruto <= 4860.00) {
            $aliquota = 0.12;
        } else {
            $aliquota = 0.14;
        }

        $inss = $salario_bruto * $aliquota;
        $salario_liquido = $salario_bruto - $inss;

        echo "<p>Salário bruto: R$ " . number_format($salario_bruto, 2, ',', '.') . "</p>";

        echo "<p>INSS (" . ($aliquota * 100) . "%): R$ " .number_format($inss, 2, ',', '.') . "</p>";

        echo "<p>Salário líquido: R$ " . number_format($salario_liquido, 2, ',', '.') . "</p>";
    }
    ?>

</body>

</html>