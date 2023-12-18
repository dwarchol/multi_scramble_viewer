<?php
function cycleP(&$a, &$b, &$c, &$d){
    $temp = $a;
    $a = $b;
    $b = $c;
    $c = $d;
    $d = $temp;
  }
  function cycleD(&$a, &$b, &$c, &$d){
    $temp = $a;
    $a = $c;
    $c = $temp;
    $temp = $b;
    $b = $d;
    $d = $temp;
  }
  function cycle(&$a, &$b, &$c, &$d){
    $temp = $a;
    $a = $d;
    $d = $c;
    $c = $b;
    $b = $temp;
  }