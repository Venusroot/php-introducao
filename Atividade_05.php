<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do Aluno FATEC</title>
</head>

<body>
    <form method="POST" action="">
        <label>Digite a Nota da P1: </label>
        <input type="text" name="p1">

        <label>Digite a Nota da P2: </label>
        <input type="text" name="p2">

        <label>Digite a Nota do Trabalho: </label>
        <input type="text" name="t3">

        <button type="submit" name="calcular">CALCULAR</button>
    </form>

    <?php

    if (isset($_POST['calcular'])) {
        $p1 = ($_POST['p1']);
        $p2 = ($_POST['p2']);
        $t3 = ($_POST['t3']);

        $media = ((($p1 + $p2) / 2) * 0.9) + $t3;

        if ($media >= 6) {
            echo "<p>O aluno foi APROVADO com média: " . round($media, 2) . "</p>";
            echo "<p> Parabéns! Nós vemos no proximo semestre.</p>";

        } elseif ($media >= 4 && $media < 6) {
            echo "<p>O aluno está de EXAME com média: " . round($media, 2) . "</p>";
            echo "<p> Boa sorte! Você vai precisar estudar mais.</p>";
            
        } else {
            echo "<p>O aluno foi REPROVADO com média: " . round($media, 2) . "</p>";
            echo "<p> Infelizmente, você não atingiu a média mínima.</p>";
        }
    }

    ?>

</body>

</html>