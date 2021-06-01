<?php // Date de la journé
setlocale(LC_TIME, "French");
echo strftime("Nous sommes le %A %d %B %Y et il est %Hh%M");
$jour=strftime("%A");// Le jour en lettre

if ($jour=='lundi') {
  echo "<p>C'est parti pour une nouvelle semaine.</p>";
}

elseif ($jour=='mardi') {
  echo "<p>Aujourd’hui j'ai piscine.</p>";
}

elseif ($jour=='mercredi') {
  echo "<p>Jour des enfants</p>";
}

elseif ($jour=='jeudi') {
  echo "<p>On sort boire un verre ?</p>";
}

elseif ($jour=='vendredi') {
  $min=60-strftime("%M"); // minute restante avant 17h
  $heure=17-strftime("%H"); // heure restante avant 17h
  if($min==60){
    $min=0;
  }
  if($min<10){
    $min="0".$min;
  }
  if ($heure<=0) {
    $heure=0;
    $min="00";
  }
  echo "<p>Presque en week-end ! Plus que ".$heure."h".$min." !";
}
switch ($jour) {
  case 'samedi':
    echo "<p>Qui fait du PHP le weekend ?</p>";
    break;

  case 'dimanche':
    echo "<p>… pas dispo</p>";
    break;
}
/*elseif ($jour=='samedi') {
  echo "<p>Qui fait du PHP le weekend ?</p>";
}

elseif ($jour=='dimanche') {
  echo "<p>… pas dispo</p>";
}*/
?>
