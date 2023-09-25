<?php

echo "Hello World<br>";

$name = "Thomas";
$age = 16;

echo "Hallo mijn naam is: " . $name . "<br>";
echo "Ik ben dus " . $age;echo " jaar oud" . "<br>";
$nummer1 = 5;
if ($nummer1 > 0) {
    echo "Het getal is groter dan 0<br>";
}
$nummer2 = 7;
if ($nummer2 >= 0 && $nummer2 <= 10) {
    echo "Het getal ligt tussen 0 en 10<br>";
}
$nummer3 = 12;
if ($nummer3 >= 0 && $nummer3 <= 10) {
    if ($nummer3 >= 5) {
        echo "Het getal is een voldoende<br>";
    } else {
        echo "Het getal is een onvoldoende<br>";
    }
} else {
    echo "Fout: Het getal moet tussen 0 en 10 liggen<br>";
}


echo "<br>";

for ($i = 15; $i >= 1; $i--) {
    echo $i . "<br>";
}

$array = [1, 2, 3, 4, 5];
foreach ($array as $a) {
    echo $a . "<br>";
}
$random = rand(1, 20);
while ($random <15) {
    echo $random . "<br>";
    $random = rand(1, 20);
}
for ($i = 1; $i <= 10; $i += 2) {
    echo $i . " ";
}
$nummer = 7;
echo "\nTafel van $nummer:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultaat = $nummer * $i;
    echo "$nummer x $i = $resultaat\n";
}
echo "\n <br> Fibonacci reeks onder 1000:\n";
$a = 0;
$b = 1;
while ($a < 1000) {
    echo $a . " ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kleurcode = $_POST["kleurcode"];
    $naam = $_POST["naam"];
    $leeftijd = $_POST["leeftijd"];
    $getal = $_POST["getal"];

    echo "<body style='background-color: $kleurcode;'>";

    for ($i = 0; $i < $leeftijd; $i++) {
        echo "Naam: $naam <br>";
    }

    echo "<h2>Tafel van vermenigvuldiging ($getal)</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultaat = $i * $getal;
        echo "<li>$getal x $i = $resultaat</li>";
    }
    echo "</ul>";
}



?>
<h1>Vul het formulier in</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Kleurcode (bijv. #FF0000): <input type="color" name="kleurcode"><br>
    Naam: <input type="text" name="naam"><br><br>
    Leeftijd: <input type="number" name="leeftijd"><br> <br>
    Getal: <input type="number" name="getal"><br><br>
    <input type="submit" value="Verstuur">
</form>
<pre>

<?php
$directory = 'img/back/';
if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            $fileWithoutPrefix = str_replace('back_', '', $file);
            $fileWithoutExtension = str_replace('.png', '', $fileWithoutPrefix);
            echo '<a href="' . $directory . $file . '" target="_blank">' . $fileWithoutExtension . '</a><br>';
        }
    }
    closedir($handle);
} else {
    echo "Kon de directory niet openen.";
}
if (isset($_GET['image'])) {
    $image = $_GET['image'];
}

?>
    <?php
    $bestandslijst = "10C.png\n10D.png\n10H.png\n10S.png\n2C.png\n2D.png\n2H.png\n2S.png\n3C.png\n3D.png\n3H.png\n3S.png\n4C.png\n4D.png\n4H.png\n4S.png\n5C.png\n5D.png\n5H.png\n5S.png\n6C.png\n6D.png\n6H.png\n6S.png\n7C.png\n7D.png\n7H.png\n7S.png\n8C.png\n8D.png\n8H.png\n8S.png\n9C.png\n9D.png\n9H.png\n9S.png\nAC.png\nAD.png\nAH.png\nAS.png\nJC.png\nJD.png\nJH.png\nJS.png\nKC.png\nKD.png\nKH.png\nKS.png\nQC.png\nQD.png\nQH.png\nQS.png\nback_blue.png\nback_gray.png\nback_green.png\nback_purple.png";
    ?>

<textarea rows="10" cols="50"><?php echo $bestandslijst; ?></textarea>























