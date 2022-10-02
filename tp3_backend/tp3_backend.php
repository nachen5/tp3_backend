<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tp N3</title>
  </head>
  <body>
    <h2>Ejercicio N1</h2>
    <p>Mostrar los números del 1 al 100.</p>
<?php
$n = 1;
while ($n<=100){
  print "<p>$n</p>";
  $n++;
}
?>
<hr>
<h2>Ejercicio N2</h2>
    <p>Mostrar los números del 100 al 1</p>
    <?php
$n = 100;
while ($n>=1){
  print "<p>$n</p>";
  $n--;
}
?>
<hr>
 <h2>Ejercicio N3</h2>
 <p>Mostrar los números pares del 1 al 20</p>
 <?php

for($n=2; $n<=20; $n= $n+2){
 
    echo $n."<br>";
}
 
?>
<hr>
<h2>Ejercicio N4</h2>
 <p>Mostrar los números impares del 1 al 20</p>
 <?php

for($n=1; $n<20; $n= $n+2){
 
    echo $n."<br>";
} 
?>
<hr>
<h2>Ejercicio N5</h2>
<p>Mostrar la suma de los números de 1 a 20</p>
<?php
 $n = 0;

for($i = 0; $i <= 20; $i=$i+1){
  $n+=$i;

}
print $n;
?>
<hr>
<h2>Ejercicio N6</h2>
<p>Mostrar la suma de los números pares de 1 a 20</p>
<?php
$n=0;

  for($i = 0; $i < 21; $i=$i+2){
    $n+=$i;
}
print $n;
?>
  </body>
</html>

