<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. 
Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prénom + ",tu as" + age + "ans".-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <?php

        function test($name = 'Lambret', $firstname = 'Aurelie', $age = '30') {
            $result = 'Bonjour ' . $name . ' ' . $firstname . ' tu as ' . $age . ' ans.';
            return $result;
        }
        ?>
        <p><?= test(); ?></p>
    </body>
</html>
