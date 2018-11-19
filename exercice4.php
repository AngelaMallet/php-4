<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4 PHP</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
   <?php 
   function hello($num1,$num2) {
        if  ($num1==$num2) {
            return 'Les deux nombres sont identiques'; 
        } else {
            if ($num1<$num2) {
                return 'Le premier nombre est plus petit';
            } else {
                return 'Le premier nombre est plus grand';
            }
        }            
    }
    echo hello(14,12); 
    ?>
</body>
</html>

