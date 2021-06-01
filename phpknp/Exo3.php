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
function Astrologiques($date){
  $signeZo=explode("-",$date);
  if ($signeZo[1]."-".$signeZo[2]>="03-21" && $signeZo[1]."-".$signeZo[2]<="04-19") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Bélier</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="04-20" && $signeZo[1]."-".$signeZo[2]<="05-20") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Taureau</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="05-21" && $signeZo[1]."-".$signeZo[2]<="06-21") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Gémeaux</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="06-22" && $signeZo[1]."-".$signeZo[2]<="07-22") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Cancer</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="07-23" && $signeZo[1]."-".$signeZo[2]<="08-22") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Lion</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="08-23" && $signeZo[1]."-".$signeZo[2]<="09-22") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Vierge</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="09-23" && $signeZo[1]."-".$signeZo[2]<="10-23") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Balance</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="10-24" && $signeZo[1]."-".$signeZo[2]<="11-22") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Scorpion</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="11-23" && $signeZo[1]."-".$signeZo[2]<="12-22") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Sagittaire</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="12-23" && $signeZo[1]."-".$signeZo[2]<="01-20") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Capricorne</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="01-21" && $signeZo[1]."-".$signeZo[2]<="02-19") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Verseau</b>.</p>";
  }
  if ($signeZo[1]."-".$signeZo[2]>="02-20" && $signeZo[1]."-".$signeZo[2]<="03-20") {
    echo "<p>Votre ami(e) est de signe astrologique <b>Poissons</b>.</p>";
  }
}

if (isset($_POST['dateAmi']) && !empty($_POST['dateAmi'])) {
  if (isset($_POST['dateVous']) && !empty($_POST['dateVous'])) {
    $Ami=$_POST['dateAmi'];
    $Vous=$_POST['dateVous'];
    $ageAmi=(strtotime(strftime("%Y-%m-%d"))-strtotime($Ami))/31536000; // 31 536 000 représente 1 an en seconde.
    $ageVous=(strtotime(strftime("%Y-%m-%d"))-strtotime($Vous))/31536000;
    $newDate=explode("-",$Ami);
    $DateAnni=strftime("%Y")."-".$newDate[1]."-".$newDate[2];
    $anniversaire=(strtotime($DateAnni)-strtotime(strftime("%Y-%m-%d")))/86400;
    $tempsNoel=(strtotime(strftime("%Y-12-25"))-strtotime($DateAnni))/86400;
    if ($anniversaire<0) {
      $DateAnni=(strftime("%Y")+1)."-".$newDate[1]."-".$newDate[2];
      $anniversaire=(strtotime($DateAnni)-strtotime(strftime("%Y-%m-%d")))/86400;
      $tempsNoel=(strtotime($DateAnni)-strtotime(strftime("%Y-12-25")))/86400;
    }
    $ageDiff=$ageAmi-$ageVous;
    if ($ageAmi<$ageVous) {
      $ageDiff=$ageVous-$ageAmi;
    }
    echo "<p>Votre ami(e) a ".number_format($ageAmi)." ans.</p>";
    Astrologiques($Ami);
    echo "<p>Le prochain anniversaire de votre ami(e) est dans ".number_format($anniversaire)." jour(s).</p>";
    echo "<p>Il restera ".number_format($tempsNoel)." jour(s) entre l'anniversaire de votre ami(e) et Noël.</p>";
    echo "<p>Vous avez ".number_format($ageDiff)." an(s) de différence.";
  }
}
?>
