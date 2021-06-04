<?php
$ingredients = [
  'beurre demi sel' => 120,
  'chocolat'        => 120,
  'sucre'           => 100,
  'farine'          => 80,
  'oeufs'           => 3
];

$unites = [
  'grammes',
  'grammes',
  'grammes',
  'grammes',
  'x'
];

$ingredients['noix'] = 50;

$unites[] = 'grammes';

print_r($ingredients);
echo "<br>";
print_r($unites);
echo "<br>";
echo "<p>".$ingredients['farine']." ".$unites[3]." de farine.</p>";

$g = count($ingredients) - count($ingredients);

foreach ($ingredients as $i => $j) {
  echo "$i : $j ".$unites[$g];
  echo "<br>";
  $g++;
}
?>
