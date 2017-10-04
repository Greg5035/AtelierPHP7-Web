<?php echo $_REQUEST ["titre"];
//$films[] = $_REQUEST ["titre"];

foreach ($films as $film) {
    echo $film ."\n";
    $tempo = $film . ",";
     $_SESSION["titres"] = $tempo;
      }
echo   $_SESSION["titres"]
?>
