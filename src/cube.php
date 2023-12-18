<?php
// w -> white
// g -> green
// r -> red
// b -> blue
// o -> orange
// y -> yellow
// corners color are coded clockwise
$cube = array(
    "U" => array(
        "center" => "w",
        "UBL" => "wob",
        "UBR" => "wbr",
        "UFR" => "wrg",
        "UFL" => "wgo",
        "UB" => "wb",
        "UR" => "wr",
        "UF" => "wg",
        "UL" => "wo"
    ),
    "F" => array(
        "center" => "g",
        "FUL" => "gow",
        "FUR" => "gwr",
        "FDR" => "gry",
        "FDL" => "gyo",
        "FU" => "gw",
        "FR" => "gr",
        "FD" => "gy",
        "FL" => "go"
    ),
    "R" => array(
        "center" => "r",
        "RUF" => "rgw",
        "RUB" => "rwb",
        "RDB" => "rby",
        "RDF" => "ryg",
        "RU" => "rw",
        "RB" => "rb",
        "RD" => "ry",
        "RF" => "rg"
    ),
    "B" => array(
        "center" => "b",
        "BUR" => "brw",
        "BUL" => "bwo",
        "BDL" => "boy",
        "BDR" => "byr",
        "BU" => "bw",
        "BL" => "bo",
        "BD" => "by",
        "BR" => "br"
    ),
    "L" => array(
        "center" => "o",
        "LUB" => "obw",
        "LUF" => "owg",
        "LDF" => "ogy",
        "LDB" => "oyb",
        "LU" => "ow",
        "LF" => "og",
        "LD" => "oy",
        "LB" => "ob"
    ),
    "D" => array(
        "center" => "y",
        "DFL" => "yog",
        "DFR" => "ygr",
        "DBR" => "yrb",
        "DBL" => "ybo",
        "DF" => "yg",
        "DR" => "yr",
        "DB" => "yb",
        "DL" => "yo"
    )
);