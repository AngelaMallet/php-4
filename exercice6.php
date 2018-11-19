<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php

        function bonjour($lastName, $firstName, $age) {
            echo 'Bonjour ' . $lastName . $firstName .' tu as ' . $age .' ans.';
        }

        bonjour('Bal ', 'Emilie', 18);
        ?>
    </body>
</html>

