<form method="post">
  <fieldset>
    <fieldset>
      <label>L'âge de votre ami(e)</label>
      <input type="number" name="age">
    </fieldset>
    <fieldset>
      <label>Le signe astrologique de votre ami</label>
      <input type="text" name="astro">
    </fieldset>
    <fieldset>
      <label>La date du prochain anniversaire de votre ami</label>
      <input type="date" name="anniversaire">
    </fieldset>
    <fieldset>
      <label>Votre âge</label>
      <input type="number" name="Vage">
    </fieldset>
    <button>Exécuter</button>
  </fieldset>
</form>

<form method="post">
  <fieldset>
    <fieldset>
      <label>La date de naissance de votre ami(e)</label>
      <input type="date" name="dateAmi">
    </fieldset>
    <fieldset>
      <label>Votre date de naissance</label>
      <input type="date" name="dateVous">
    </fieldset>
    <button>Exécuter</button>
  </fieldset>
</form>
<?php

// faire une fonction pour les signes astrologiques

if (isset($_POST['dateAmi']) && !empty($_POST['dateAmi'])) {
  if (isset($_POST['dateVous']) && !empty($_POST['dateVous'])) {
    $Ami=$_POST['dateAmi'];
    $Vous=$_POST['dateVous'];
    $ageAmi=(strtotime(strftime("%Y-%m-%d"))-strtotime($Ami))/31536000; // 31 536 000 représente 1 an en seconde.
    echo "<p>Votre ami(e) a ".number_format($ageAmi)." ans.</p>";
  }
}

if (isset($_POST['age']) && !empty($_POST['age'])) {
  $age=$_POST['age'];
  $astro=$_POST['astro'];
  $anniversaire=$_POST['anniversaire'];
  $Vage=$_POST['Vage'];
  $jourRest=(strtotime($anniversaire)-strtotime(strftime("%Y-%m-%d")))/86400;
  $tempsNoel=(strtotime(strftime("%Y-12-25"))-strtotime($anniversaire))/86400;
  if ($age>$Vage) {
    $ageDiff=$age-$Vage;
  }
  else {
    $ageDiff=$Vage-$age;
  }
  echo "<p>Votre ami(e) a ".$age." ans.</p>";
  echo "<p>Votre ami(e) est de signe astrologique ".$astro.".</p>";
  echo "<p>Le prochain anniversaire de votre ami(e) est dans ".number_format($jourRest)." jour(s).</p>";
  echo "<p>Il restera ".number_format($tempsNoel)." jour(s) entre l'anniversaire de votre ami(e) et Noël.</p>";
  echo "<p>Vous avez ".$ageDiff." an(s) de différence.";
}// à refaire les deux anniversaires
?>
