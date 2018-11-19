<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <?php
       
        function test($nb1 = 12, $nb2 = 14) {
            if ($nb1 == $nb2) {
                $result = "Les deux nombres sont identiques";
            } else if ($nb1 > $nb2) {
                $result = " Le premier nombre est plus grand ";
            } else { // SINON
                $result = "Le premier nombre est plus petit";
            }
            return $result;
        }
        ?>
        <p><?= test() ?></p>
    </body>
</html>

