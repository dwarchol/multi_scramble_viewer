<?php

require_once(dirname(__FILE__) ."/../cycles.php");
require_once(dirname(__FILE__) ."/../move.php");
require_once(dirname(__FILE__) ."/../draw.php");
require_once(dirname(__FILE__) ."/../cube.php");
require_once(dirname(__FILE__) ."/../scrambles.php");


$scramble1_list = explode(PHP_EOL, $scrambles_attempt_1);
$scramble2_list = explode(PHP_EOL, $scrambles_attempt_2);
//print_r($scramble_list);

//-------------------------------------
echo "<html>

  <head>
    <link rel='stylesheet' href='style.css'>
  </head>
  <div class='top'>
  <h1> MBLD Cup </h1>
  <h2> tydzień 96 (24-4) 18.12 - 28.12</h2>
  <h3> Próba 1 </h3>
  </div>
  <table class='top_table'>
  <tr>
  <th class='left1'><p1>Scramble</p1></th>
  <th class='right1'><p1>Górna ścianka</p1></th>
</tr>
</table>
";

foreach($scramble1_list as $scr){
  $scramble_mod = str_replace("'", "p", $scr);
  $moves = explode(" ", $scramble_mod);
  array_shift($moves);
  $cube = $solved_cube;

  foreach($moves as $move) {
    if($move != ""){
      $fun = "move" . $move;
      $fun($cube);
    }
  };
  echo "<table class='row_table'>
  <td class='left1'>  <p1>";
  echo($scr);
  echo "</p1></td>
  <td class='right1'>";
  drawUSide($cube);
  echo "</td>
  </table>";
}
echo "
  <div class='top'>
  <h3> Próba 2 </h3>
  </div>
  <table class='top_table'>
  <tr>
  <th class='left2'><p1>Scramble</p1></th>
  <th class='right2'><p1>Górna ścianka</p1></th>
</tr>
</table>
";

foreach($scramble2_list as $scr){
  $scramble_mod = str_replace("'", "p", $scr);
  $moves = explode(" ", $scramble_mod);
  array_shift($moves);
  $cube = $solved_cube;

  foreach($moves as $move) {
    if($move != ""){
      $fun = "move" . $move;
      $fun($cube);
    }
  };
  echo "<table class='row_table'>
  <td class='left2'>  <p1>";
  echo($scr);
  echo "</p1></td>
  <td class='right2'>";
  drawUSide($cube);
  echo "</td>
  </table>";
}

//---------------------------------------

// $scramble = "1) U' R U' L2 D L2 D2 L2 F2 R2 F2 D R2 U B' R' U R2 F' L' U Rw2 Uw";

// $scramble_mod = str_replace("'", "p", $scramble);
// $moves = explode(" ", $scramble_mod);
// array_shift($moves);
// $cube = $solved_cube;
// foreach($moves as $move) {
// $fun = "move" . $move;

// $fun($cube);

// }


// echo "<br>";
// echo $scramble;

// echo '<br><br><br>';

// echo "<html>

//   <head>
//     <link rel='stylesheet' href='style.css'>
//   </head>
  
//   <body>
//   <table>
//   <tr>
//   <th class='left'>Cell</th>
//   <th class='right'>Nested Table</th>
// </tr>
// <tr>
//   <td class='left'>Cell</td>
//   <td class='right'>
//   ";
//    drawUSide($cube);
// // drawFSide($cube);
// // drawRSide($cube);
// // drawBSide($cube);
// // drawLSide($cube);
// // drawDSide($cube);

// //drawCube($cube);

// echo "
// </td>
// </tr>
// </table>
// </table>
// </div>";

?>