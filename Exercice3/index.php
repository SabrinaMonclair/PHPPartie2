<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>

<body>
    <h1>Exercice3</h1>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :

        Homme
        Femme

        En fonction de l'âge et du genre afficher la phrase correspondante :

        Vous êtes un homme et vous êtes majeur
        Vous êtes un homme et vous êtes mineur
        Vous êtes une femme et vous êtes majeure
        Vous êtes une femme et vous êtes mineur
        Gérer tous les cas. </p>

    <?php
    $age = 33;
    $gender = "femme";

    if ($gender == "femme" && $age >= 18){
        echo "Vous êtes une femme et vous êtes majeure";
    } else if ($gender == "femme" && $age < 18){
        echo "Vous êtes une femme et vous êtes mineur";  
    } else if ($gender == "homme" && $age >= 18){
        echo "Vous êtes un homme et vous êtes majeure";
    } else ($gender == "homme" && $age < 18){
        echo "Vous êtes un homme et vous êtes mineur";
    }

    ?>
    
</body>

</html>