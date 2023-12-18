<?php

require_once(dirname(__FILE__) ."/../cycles.php");
require_once(dirname(__FILE__) ."/../move.php");
require_once(dirname(__FILE__) ."/../draw.php");
require_once(dirname(__FILE__) ."/../cube.php");

$scramble = "1) U' R U' L2 D L2 D2 L2 F2 R2 F2 D R2 U B' R' U R2 F' L' U Rw2 Uw";
//  $scramble = "U F2 U' B2 D'";
$scramble_mod = str_replace("'", "p", $scramble);
$moves = explode(" ", $scramble_mod);
array_shift($moves);

foreach($moves as $move) {
$fun = "move" . $move;

$fun($cube);

}


echo "<br>";
echo $scramble;

echo '<br><br><br>';

echo "<html>

  <head>
    <link rel='stylesheet' href='style.css'>
  </head>
  
  <body>";
   drawUSide($cube);
// drawFSide($cube);
// drawRSide($cube);
// drawBSide($cube);
// drawLSide($cube);
// drawDSide($cube);

//drawCube($cube);

echo "</table>
</div>";

?>