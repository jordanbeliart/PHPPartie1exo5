<?php
$answer = 'yes';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie1 exo5</title>
  </head>
  <body>
    <p>
      <?php
        if($answer == 'yes'){
          echo 'Vous avez répondu "oui"';
        } else{
          echo 'Vous avez répondu "non"';
        }
      ?>
    </p>
  </body>
</html>
