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

function lesMultiples($chiffre) {
  echo "<p><b>Les multiples de $chiffre :</b> ";
}

function multiples($chiffre, $max) {
  for ($i = 1; $i < $max; $i++) {
    $multiple[$i-1] = $chiffre * $i;

    if ($multiple[$i-1] >= $max) {
      unset($multiple[$i-1]);
      break;
    }
  }

  return $multiple;
}

function sommeMul($chiffre, $multiple) {
  $somme = 0;

  foreach ($multiple as $i => $j) {
    $somme = $somme + $multiple[$i];
  }

  echo "<p>La somme de tous les multiples de $chiffre strictement inférieurs à 1000 est $somme.</p>";
}

function sommeOne($somme) {
  foreach ($somme as $i => $j) {
    echo $somme[$i].", ";
  }

  echo "</p>";
}

function sommeAllMul($somme3, $somme5) {
  $somme = array_merge($somme3, $somme5);
  sort($somme);
  $sommeNoDoublon = array_unique($somme);

  return $sommeNoDoublon;
}

echo "<br><br><h1>AlgoExo5</h1>";
echo "<h2>Somme des multiples 3 et 5</h2>";

lesMultiples(3);
$somme3 = multiples(3, 1000);
sommeOne($somme3);
sommeMul(3, $somme3);

lesMultiples(5);
$somme5 = Multiples(5, 1000);
sommeOne($somme5);
sommeMul(5, $somme5);

echo "<h2>Somme de tous les multiples</h2>";

$sommeAll = sommeAllMul($somme3, $somme5);
sommeOne($sommeAll);
sommeMul('3 et 5', $sommeAll);

// algoExo6

function fibonacciSuite($n) {
  $num1 = 1;
  $num2 = 2;
  $compteur = 0;
  $fibonacciBoite = [];
  $pairs = [];
  $i = 0;

  while ($num1 < $n) {
    $fibonacciBoite[$compteur] = $num1;

    if ($num1 % 2 == 0) {
      $pairs[$i] = $num1;
      $i++;
    }

    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $compteur++;
  }

  return array($fibonacciBoite, $pairs);
}

function fibonacciDeroulement($pairs) {

  foreach ($pairs as $j => $g) {
    echo $pairs[$j].", ";
  }
}

function fibonacciSommePairs($pairs) {
  $somme = 0;

  foreach ($pairs as $k => $l) {
    $somme = $somme + $pairs[$k];
  }

  return $somme;
}

echo "<br><br><h1>AlgoExo6</h1>";
echo "<h2>La suite de Fibonacci</h2>";

$fibonacciSuite = fibonacciSuite(4000000);
fibonacciDeroulement($fibonacciSuite[0]);

echo "<h2>Les pairs</h2>";

fibonacciDeroulement($fibonacciSuite[1]);
$fibonacciSommePairs = fibonacciSommePairs($fibonacciSuite[1]);

echo "<p><b>Somme de toutes les pairs est</b> $fibonacciSommePairs.</p>";

// AlgoExo7

$n = 13195;

function Decomposition($n) {
  $primeFactor = 2;
  $displaysPrimeFactor = [];
  $changeDisplays = 0;
  $next = false;

  while ($n > 1) {
    $a = 0;

    while ($n % $primeFactor == 0) {
      $n = $n / $primeFactor;
      $a++;
    }

    if ($a >= 1) {

      if ($next) {
        $displaysPrimeFactor[$changeDisplays] = ' * ';
        $changeDisplays++;

      } else {
        $next = true;
      }

      $displaysPrimeFactor[$changeDisplays] = "<b>$primeFactor</b>";
      $changeDisplays++;

      if ($a > 1) {
        $displaysPrimeFactor[$changeDisplays] = '^'.$a;
        $changeDisplays++;
      }
    }

    $primeFactor++;
  }

  unset($displaysPrimeFactor[$changeDisplays]);
  return array(--$primeFactor, $displaysPrimeFactor);
}

function displaysPrimeFactor($displaysPrimeFactor) {
  foreach ($displaysPrimeFactor as $i => $j) {
    echo $displaysPrimeFactor[$i];
  }
}

echo "<br><br><h1>AlgoExo7</h1>";
echo "<h2>The Prime Factors</h2>";
echo "<p><b>$n</b> = ";

$factor = Decomposition($n);

displaysPrimeFactor($factor[1]);

echo "</p>";
echo "<p><b>The biggest factor is</b> ".$factor[0].".</p>";
?>
