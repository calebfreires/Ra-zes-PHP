<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $number = $_GET['number']
    ?>

    <main>
        <h1>Informe um número</h1>
            <!-- Enviando os dados para o próprio arquivo -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number">Número</label>
            <input type="number" name="number" id="number" value="<?=$number?>">

            <input type="submit" value="Calcular raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php 
            // função sqrt é automaticamente raíz quadrada
            $quadrada = sqrt($number);

            $cubica = $number ** (1/3);
        
            echo "<p>Analisando o número <strong>$number</strong> temos:</p>";

            echo 
                "<ul>
                    <li>A sua raíz quadrada é: <strong>". number_format($quadrada, 3, ",", ".") ."</strong> </li>
                    <li>A sua raíz cúbica é: <strong>". number_format($cubica, 3, ",", ".") ."</strong></li>
                </ul>"

        ?>
    </section>
</body>
</html>