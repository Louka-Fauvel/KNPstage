<?php
session_start();
?>
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
    <button <?php EssaisMax(); ?>>Exécuter</button>
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
function NBessais($vrai){
  if ($vrai==true) {
    $_SESSION['count']=0;
  }elseif ($vrai==false) {
    if (isset($_SESSION['count'])) {
      $_SESSION['count']++;
      $nbessais=3-$_SESSION['count'];
      if ($_SESSION['count']==3) {
        echo "Il n'y a plus d'essais.";
      }else {
        echo "Encore $nbessais essais.";
      }
    }else {
      $_SESSION['count']=0;
      $_SESSION['count']++;
      $nbessais=3-$_SESSION['count'];
      echo "Encore $nbessais essais.";
    }
  }
}
function EssaisMax(){
  if (isset($_SESSION['count'])) {
    if ($_SESSION['count']>=2) {
      $_SESSION['count']=2;
      echo "disabled";
    }
  }
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
          if ($chiff1>10 && $chiff1<=100) {
            if ($chiff1>$chiff2) {
              if ($chiff2!=0) {
                NBessais(true);
                echo "<p>Le premier nombre est <b>$chiff1</b> et le deuxième nombre est <b>$chiff2</b>.</p>";
                additionner($chiff1, $chiff2);
                echo "<br>";
                multiplier($chiff1, $chiff2);
                echo "<br>";
                diviser($chiff1, $chiff2);
                echo "<br>";
                modulo($chiff1, $chiff2);
              }else {
                echo "<p>Erreur le deuxième nombre ne doit pas être égale à 0.</p>";
                NBessais(false);
              }
            }else {
              echo "<p>Erreur le premier nombre doit être plus grand que le deuxième nombre.</p>";
              NBessais(false);
            }
          }else {
            echo "<p>Erreur le premier nombre doit être compris entre 10 et 100 inclus</p>";
            NBessais(false);
          }

        }else {
          echo "<p>Erreur le deuxième nombre doit être entier</p>";
          NBessais(false);
        }
      }else {
        echo "<p>Erreur le premier nombre doit être entier</p>";
        NBessais(false);
      }
    }else {
      echo "<p>Erreur il faut un nombre entier</p>";
      NBessais(false);
    }
  }
}
?>
