<?php
$etudiants = array (        
    [
            'nom'=>"LÉ",
            'prenom' => "Nicolas",
            'profession' => "Développeur Php",
            'description' => "Passionné et motivé par le code",
            'annee_naissance' => 1998,
            'urlphoto' => "img/Nicolas.png",
        ],
        
        array(
            'nom'=>"MAURICE",
            'prenom' => "Barnabé",
            'profession' => "Chômeur",
            'description' => "ptit filoutubes, à vos ordre chefs",
            'annee_naissance' => 2003,
            'urlphoto' => "img/Barnabe.png",
        ),
        [
            'nom'=>"VINCENT",
            'prenom' => "Stéphane",
            'profession' => "Linuxien",
            'description' => "Une dose de pinguoin dans votre ordi",
            'annee_naissance' => 1981,
            'urlphoto' => "img/stéphane.png",
        ],
        [
            'nom'=>"ZAVALA",
            'prenom' => "Agustin",
            'profession' => "Développeur WEB",
            'description' => "Mexican powaaaa ! ",
            'annee_naissance' => 1982,
            'urlphoto' => "img/agustin.png",
        ],
        [
            'nom'=>"ZAVALA",
            'prenom' => "Annaëlle",
            'profession' => "Développeuse",
            'description' => "Lorem ipsum .... ",
            'annee_naissance' => 2007,
            'urlphoto' => "img/annaelle.png",
        ],
    );            
    ?>
        <pre>
        <?php 
        foreach($etudiants as $etudiant){
            echo "<hr>";
            print_r($etudiant['nom']);
        }
        ?>

        </pre>

        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <title>Document</title>
    
</head>
<body>    
        <?php
       $nom = "Benoist";
       $prenom = "Cyril";
       $profession = "Developpeur";
       $description = "Passionné et motivé par le code";
       $annee_naissance = "1991";
       $urlphoto = "";
       define("TEXT_BUTTON","EN SAVOIR PLUS");


                      
            echo '<div class="container">'.'<div class="card">'.

                '<div class="card__name">'.$nom.'</div>';
            echo           
                '<div class="card__name">'.$prenom.'</div>';
            echo
                '<div class="card__name">'.$profession.'</div>';
            echo
                '<div class="card__name">'.$description.'</div>';
            echo
                '<div class="card__name">'.$annee_naissance.'</div>';
            echo
                '<div class="card__imgage">'.$urlphoto.'</div>';
            echo'
            <button type="submit" class="btn">EN SAVOIR PLUS</button>'
        ?>
        

        <?php

        
foreach($etudiants as $etudiant){
    $calcul = date("Y") - $etudiant["annee_naissance"];
    echo "<div class='adjust'>";
        echo "<div class='identity'>";
    
            echo '<img src='.$etudiant["urlphoto"].' alt="photo">';

            echo "<div class='names'>";
        
                echo '<h1> '.$etudiant["nom"].'  '.$etudiant["prenom"].' </h1>';
        
            echo "</div>";
        echo "</div>";
        echo "<div class='profession'>";
        
            echo '<h2>profession : '.$etudiant["profession"].'</h2>';
        
        echo "</div>";
        echo "<div class='age'>";
        
                echo '<h3> age : '.$calcul.' ans</h3>';
        
        echo "</div>";
        echo "<div class='description'>";
        
            echo '<p>'.$etudiant["description"].'</p>';
        
        echo "</div>";
        echo "<button>";
        
            echo TEXTE_BUTTON;
        
        echo "</button>";
    echo "</div>";
}
?>

        ?>
</body>
</html>



