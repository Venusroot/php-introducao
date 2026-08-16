<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área e Perimetro do quadrado</title>
</head>
<body>

    <form method="POST" action="">
        <label>Digite o valor do quadrado: </label>
        <input type="text" name="n1">
        <button type="submit" name="calcular">CALULAR</button>
    </form>

    <?php
        if (isset($_POST['calcular'])){
            //Setando variavel
            $n1 = $_POST['n1'];

            $perimetro = $n1 * 4;
            $area = $n1 * $n1;

            echo "<h3>";
            echo "O resultado do perimetro do quadrado com lados $n1 é: " .round($perimetro,2);
            echo "<br>";
            echo "O resultado da Área do quadrado com lados $n1 é: ".round($area,2);

        }

    ?>
    
</body>
</html>