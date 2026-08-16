<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inteiro Maior ou Menor</title>
</head>

<body>

    <form method="POST" action="">
        <label>Digite o primeiro número: </label>
        <input type="text" name="n1">

        <label>Digite o segundo número: </label>
        <input type="text" name="n2">

        <label>Digite o terceiro número: </label>
        <input type="text" name="n3">

        <button type="submit" name="mostrar">MOSTRAR</button>
    </form>

    <?php
    if (isset($_POST['mostrar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        // Descobrir o maior
        if ($n1 >= $n2 && $n1 >= $n3) {
            $maior = $n1;
        } elseif ($n2 >= $n1 && $n2 >= $n3) {
            $maior = $n2;
        } else {
            $maior = $n3;
        }

        // Descobrir o menor
        if ($n1 <= $n2 && $n1 <= $n3) {
            $menor = $n1;
        } elseif ($n2 <= $n1 && $n2 <= $n3) {
            $menor = $n2;
        } else {
            $menor = $n3;
        }

        echo "O maior número é: $maior<br>";
        echo "O menor número é: $menor";
    }
    ?>

</body>

</html>