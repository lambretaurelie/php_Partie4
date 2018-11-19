<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
    Homme
    Femme
La fonction doit renvoyer en fonction des paramètres :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
Gérer tous les cas.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <?php
/// on crée deux variables 
        function test($age = 12, $gender = 'homme') {
            if ($age > 0 && ($gender == 'homme' || $gender == 'femme')) {
                if ($age < 18 && $gender == homme) {
                    $result = "Vous êtes un homme et vous êtes mineur!";
                } else if ($age >= 18 && $gender == homme) {
                    $result = "Vous êtes un homme et vous êtes majeur!";
                } else if ($age < 18 && $gender == femme) {
                    $result = "Vous êtes une femme et vous êtes mineur!";
                } else {
                    $result = "Vous êtes une femme et vous êtes majeur!";
                }
                return $result;
            }
        }
        ?>
        <p><?= test() ?></p>