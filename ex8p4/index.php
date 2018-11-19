<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice8</title>
    </head>
    <body>
        <?php

        function somme($nb1 = 12, $nb2 = 10, $nb3 = 28) {
            $result = $nb1 + $nb2 + $nb3;
            return $result;
        }
        ?>
        <p><?= somme(); ?></p>
    </body>
</html>

