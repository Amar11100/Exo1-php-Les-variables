<!DOCTYPE html>
<html>
<head>
  <title>Exercice1</title>
  <meta charset="UTF-8">
</head>
<body>
  <?php
  $nom = "Amh";
  echo "Mon nom est ".$nom;
?>
<hr>
<?php
$prenom = "Amar";
$age = 20;
echo "mon nom est $nom ,mon prenom est $prenom et j'ai $age ans"

 ?>
    <hr>
    <?php
  $km = 1;
  $km = 3 ;
  $km = 125 ;
  echo  $km;
 ?>
  <hr>
  <?php
  $string ="hello";
  $int =10;
  $float = 1.5;
  $bolean = true;
  $quelType = gettype($int);
  echo $quelType;
  echo "$string $int $float $bolean";
?>
<hr>
<?php
$int ="";
echo "$int";
$int ="bonjour";
echo "$int";
?>
<hr>
<?php
$nom = "amar";
echo " bonjour,".$nom." comment vas tu?";
 ?>
 <hr>
 <?php
 $nom = "Amh";
 $prenom ="Amar";
 $age = 30;
 echo "bonjour, ".$nom ." " .$prenom. " ".$age." ans";
  ?>
  <hr>
  <?php
  $nom = "Amh";
  $prenom ="Amar";
  $age = 30;
  echo "bonjour ".$nom ." ".$prenom .",tu as ". $age." ans.";
  ?>
  <hr>
  <?php
  $operation1 = 3 + 4;
  $operation2 = 5 * 20;
  $operation3 = 45 / 5;
  echo $operation1." ".$operation2." ".$operation3;
  ?>
