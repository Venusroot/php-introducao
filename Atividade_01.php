<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    
<!-- Iniciando Variveis-->

    <form method="POST" action="">
        <label> Digite um Numero Inteiro:</label>
        <input type="text" name="inteiro">
        <button type="submit" name="mostrar">Mostrar</button>
    </form>

    <?php
    //setando as variaveis

        if(isset($_POST['mostrar'])){
            $inteiro = $_POST['inteiro'];
            //Processamento
                $antecessor = $inteiro - 1;
                $sucessor   = $inteiro + 1;
                 echo "<h3>";
                 echo "<br>";
                 echo "O antecessor do número digitado é: " .$antecessor;
                 echo "<br>";
                 echo "O sucessor do número digitado é: " .$sucessor;
        }
        
    ?>

</body>
</html>