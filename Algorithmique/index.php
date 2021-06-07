<?php
// AlgoExo1
$N = [1, 2, 3, 4, 5, 6];
$M = [1, 3, 6];

$intersection = array_intersect($N, $M);

echo "<h1>AlgoExo1</h1>";
print_r($N);
echo "<br>";
print_r($M);
echo "<h2>Intersection</h2>";
print_r($intersection);

// AlgoExo2
$N = [1, 99, 101, 202];
$M = [1, 2, 999];

$union = array_merge($N, $M);

echo "<br><br><h1>AlgoExo2</h1>";
print_r($N);
echo "<br>";
print_r($M);
echo "<h2>Union</h2>";
print_r($union);

// AlgoExo3
$difference = array_diff($N, $M);

echo "<br><br><h1>AlgoExo3</h1>";
print_r($N);
echo "<br>";
print_r($M);
echo "<h2>Différence</h2>";
print_r($difference);

//AlgoExo4
$matrice[0] = [1, 2, 3, 4];
$matrice[1] = [2, 1, 2, 3];
$matrice[2] = [3, 2, 1, 2];
$matrice[3] = [4, 3, 2, 1];

$k = 0;

echo "<br><br><h1>AlgoExo4</h1>";
echo "<h2>Matrice</h2>";

for ($i = 0; $i < $matrice[3][0]; $i++) {
  for ($j = 0; $j < $matrice[0][3]; $j++) {
    echo $matrice[$i][$j]."&nbsp; &nbsp; &nbsp;";
    if ($j == 3) {
      echo "<br>";
    }
    if ($matrice[$i][$j] % 2) {
      $k++;
    }
  }
}

echo "<h2>Nombre de chiffre pair</h2>";
echo "$k pair(s)";

//AlgoExo5

echo "<br><br><h1>AlgoExo5</h1>";
echo "<h2>Somme de tous les multiples</h2>";
echo "<p><b>Les multiples de 3 :</b> ";

$somme3 = 0;
$somme5 = 0;

for ($i = 0; $i < 1000; $i++) {
  $multiple3 = 3 * $i;
  $somme3 = $somme3 + $multiple3;
  if ($somme3 < 1000) {
    echo "$multiple3, ";
  }else {
    $somme3 = $somme3 - $multiple3;
    $multiple3 = 3 * ($i - 1);
    echo "</p>";
    break;
  }
}
echo "<p>La somme de tous les multiples de 3 strictement inférieurs à 1000 est $somme3.</p>";

echo "<p><b>Les multiples de 5 :</b> ";

for ($i = 0; $i < 1000; $i++) {
  $multiple5 = 5 * $i;
  $somme5 = $somme5 + $multiple5;
  if ($somme5 < 1000) {
    echo "$multiple5, ";
  }else {
    $somme5 = $somme5 - $multiple5;
    $multiple5 = 5 * ($i - 1);
    echo "</p>";
    break;
  }
}
echo "<p>La somme de tous les multiples de 5 strictement inférieurs à 1000 est $somme5.</p>";
?>
