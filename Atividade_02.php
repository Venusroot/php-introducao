<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o Triangulo Equilatero</title>
</head>
<body>
    <form method="POST" action="">
        <label>Digite o valor do Triangulo </label>
        <input type="text" name="triangulo">
        <button type="submit" name="calcular">CALCULAR</button>
    </form>

    <?php
        if(isset($_POST['calcular'])){
            $triangulo=$_POST['triangulo'];
            //Processo do calculo
            $area = (($triangulo * $triangulo) * sqrt(3)) / 4;

            echo"<h3>";
            echo "A área do triângulo equilátero de lado $triangulo é: " . round($area ,2);
        }
    ?>
</body>
</html>