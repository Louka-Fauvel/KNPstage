<?php // Date de la journé
setlocale(LC_TIME, "French");
echo strftime("Nous sommes le %A %d %B %Y et il est %Hh%M");
$vendredi=strftime("%A");// Le jour en lettre
if ($vendredi=='vendredi') {
$min=60-strftime("%M"); // minute restante avant 17h
$heure=16-strftime("%H"); // heure restante avant 17h
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
?>
