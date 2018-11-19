<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php
    
        function sum1($num1 = 3, $num2 = 1, $num3 = 2){
            return $num1 + $num2 + $num3; 
        }
        echo sum1();
        ?>
    </body>
</html>

