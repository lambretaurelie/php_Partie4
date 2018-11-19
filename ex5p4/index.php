<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit 
la concaténation de ces deux paramètres.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <?php

        function test($text = 'Vous êtes', $nb1 = 12) {
            $result = $text . $nb1;
            return $result;
        }
        ?>
        <p><?= test(); ?></p>
    </body>
</html>
