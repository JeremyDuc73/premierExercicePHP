<?php
$resultat = "machin ";
$test ="";
for ($i = 1; $i <= 10; $i++) {
    $test = $test.$resultat;
}

$nSec = 60*60*24*365;

$nSecDivise = $nSec*0.2754;

$tableau = ["rouge", "bleu", "vert", "marron", "rose"];
$tableau2 = ["rouge", "bleu", "vert", "marron", "dauphin", "rose"];

$animaux = [
    "dauphin"=>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron"
];

$animauxDangereux = ["hyene", "autruche", "cobra", "requin", "crocodile"];
$animaux2 = [
    "dauphin"=>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron",
    "requin"=>"blanc",
    "dingo"=>"brun",
    "autruche"=>"noir",
    "crocodile"=>"vert"
];

$caracteres = "abcdefgh0123456789";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
</head>
<body>
    <h1>Coucou</h1>
    <p>Resultat : <?php echo $test; ?></p>
    <p>Nombre de secondes dans une année complète : <?php echo $nSec ?>s</p>
    <p>27,54% du resultat précédent : <?php echo $nSecDivise ?>s</p>
    <table class="mt-5 table table-striped">
        <thead>
        <tr>
            <th>Couleurs</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($tableau as $couleur){
                $couleur ="<tr><td>$couleur</td></tr>";
                echo $couleur;
            }
        ?>

        </tbody>
    </table>
    <table class="mt-5 table table-striped">
        <thead>
        <tr>
            <th>Couleurs2 Sans Dauphin</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tableau2 as $couleur){
            if (in_array($couleur, $tableau)){
                $couleur ="<tr><td>$couleur</td></tr>";
                echo $couleur;
            }

        }
        ?>

        </tbody>
    </table>
    <table class="mt-5 table table-striped">
        <thead>
        <tr>
            <th>Animal</th>
            <th>Couleur</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($animaux as $animal => $couleurAnimal){
            $animal ="
            <tr>
                <td>$animal</td>
                <td>$couleurAnimal</td>
            </tr>";
            echo $animal;
        }
        ?>
        </tbody>
    </table>
    <table class="mt-5 table table-striped">
        <thead>
        <tr>
            <th>Animal</th>
            <th>Couleur</th>
            <th>Danger</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($animaux2 as $animal => $couleurAnimal){
            if (in_array($animal, $animauxDangereux)){
                $test = "<div class='rouge cercle'></div>";
            }else{
                $test = "<div class='vert cercle'></div>";
            }
            $animal ="
            <tr>
                <td>$animal</td>
                <td>$couleurAnimal</td>
                <td>$test</td>
            </tr>";
            echo $animal;
        }
        ?>
        </tbody>
    </table>

    <?php
        $caracteresArray = str_split($caracteres);
        $couleurCarre = "#";
        for ($i=0 ; $i<6 ; $i++){
            $value = rand(0, count($caracteresArray)-1);
            $couleurCarre.=$caracteresArray[$value];
        }
        echo "<div class='carre mb-5' style='background-color:$couleurCarre'</div>";
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>