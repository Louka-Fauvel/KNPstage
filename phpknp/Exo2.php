<form method="post">
  <fieldset>
    <fieldset>
      <label>Combien de chien avez-vous ?</label>
      <input type="number" name="nbchien" id="nbchien"></input>
      <button>Combien</button>
    </fieldset>
  </fieldset>
</form>

<?php
if(isset($_POST)){
  if (isset($_POST['nbchien'])){
    $nbchien=$_POST['nbchien'];
    if ($nbchien==0) {
      echo "C'est une bien triste nouvelle ! :(";
    }
    else{
      echo "<form method='post'>
              <fieldset>";
      for ($i=1; $i <=$nbchien; $i++) {
        echo "<fieldset>
                <label>Quelle est sa race ?</label>
                <input type='text' name='race".$i."' id='race".$i."'></input>
                <label>Quelle est son nom ?</label>
                <input type='text' name='nom".$i."' id='nom".$i."'></input>
              </fieldset><br>";
      }
      echo "  <input type='hidden' name='nb' id='nb' value='$i'>
              <button>Exécuter</button>
            </fieldset>
          </form>";
    }
  }
  if (isset($_POST['race1']) && !empty($_POST['race1'])) {
    $nb=$_POST["nb"];
    for ($j=1; $j <$nb; $j++) {
      $raceChien=$_POST["race$j"];
      $nomChien=$_POST["nom$j"];
      echo "<p>Le chien est de race <b>".$raceChien."</b> et son nom est <b>".$nomChien."</b>.</p>";
    }
  }
}
?>
