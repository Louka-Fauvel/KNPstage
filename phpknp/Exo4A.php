<form method="post">
  <fieldset>
    <fieldset>
      <label>Insérer un premier nombre</label>
      <input type="text" name="nb1">
    </fieldset>
    <fieldset>
      <label>Insérer un deuxième nombre</label>
      <input type="text" name="nb2">
    </fieldset>
    <button>Exécuter</button>
  </fieldset>
</form>
<?php
function additionner($NB1, $NB2){
  $Addi=$NB1+$NB2;
  echo "Addition : $NB1 + $NB2 = $Addi";
}
function multiplier($NB1, $NB2){
  $Addi=$NB1*$NB2;
  echo "Multiplication : $NB1 x $NB2 = $Addi";
}
function diviser($NB1, $NB2){
  $Addi=$NB1/$NB2;
  echo "Division : $NB1 / $NB2 = $Addi";
}
function modulo($NB1, $NB2){
  $Addi=$NB1%$NB2;
  echo "Division : $NB1 % $NB2 = $Addi";
}

if(isset($_POST)){
  if (isset($_POST['nb1']) && !empty($_POST['nb1'])) {
    if (isset($_POST['nb2']) && !empty($_POST['nb2'])) {
      $chiff1=1*$_POST['nb1'];
      $chiff2=1*$_POST['nb2'];
      $nb1=is_int($chiff1);
      $nb2=is_int($chiff2);
      if ($nb1==1) {
        if ($nb2==1){
          echo "<p>Le premier nombre est <b>$chiff1</b> et le deuxième nombre est <b>$chiff2</b>.</p>";
          additionner($chiff1, $chiff2);
          echo "<br>";
          multiplier($chiff1, $chiff2);
          echo "<br>";
          diviser($chiff1, $chiff2);
          echo "<br>";
          modulo($chiff1, $chiff2);
        }else {
          exit("<p>Erreur il faut un nombre entier</p>");
        }
      }else {
        exit("<p>Erreur il faut un nombre entier</p>");
      }
    }else {
      exit("<p>Erreur il faut un nombre entier</p>");
    }
  }
}
?>
