<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BadWords</title>
  </head>
  <body>
    <?php

      // GOAL: Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

      $txt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

      $badWord = $_GET["badword"];

      $txt = str_replace($badWord, "***", $txt, $counter);

      $words = explode(" ", $txt);

     ?>
    <h1>Paragrafo</h1>
    <p>
      <?php

        echo $txt;

       ?>
    </p>
      <h2>
        <?php

          echo "Questo paragrafo è composto da " . count($words) . " parole. Ne sono state sostituite " . $counter . " perchè badwords."

         ?>
      </h2>
  </body>
</html>
