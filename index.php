<?php
$lang ="fr";
include("src/function.php");
include("tailwind.config.js");

// tableau des étudiants
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
    [
        'nom'=>"DENVER",
        'prenom' => "Agustin",
        'profession' => "Développeur WEB",
        'description' => "Le dernier dinosaure ! ",
        'annee_naissance' => 1995,
        'urlphoto' => "img/christophe.png",
    ],
);
?>

<?php 
echo "<pre>"; 
//print_r($etudiants); 
echo "</pre>";?>



<?php include("src/header.php"); ?>
<section class="cards">
    <?php
    foreach ($etudiants as $etudiant) {
        ?>
        <div class="card">
            <img src="<?php echo $etudiant['urlphoto'];?>"/>
            <h2><?php echo $etudiant['nom']. ' '.$etudiant['prenom'] ;?></h2>

            <div class="info">
                <span class="profession"><?php echo $etudiant['profession']; ?></span>
                <span class="age">Age : <?php echo calculAge($etudiant['annee_naissance']) ?></span>
                <span class="description">
                    <?php echo $etudiant['description']; ?>
                </span>
            </div>
        </div>
    <?php
    }
    ?>

</section>
