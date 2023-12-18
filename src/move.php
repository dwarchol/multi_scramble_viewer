<?php
function moveM(&$cube)
{
  cycle($cube["U"]["UF"], $cube["B"]["BU"], $cube["D"]["DB"], $cube["F"]["FD"]);
  cycle($cube["F"]["FU"], $cube["U"]["UB"], $cube["B"]["BD"], $cube["D"]["DF"]);
  cycle($cube["U"]["center"], $cube["B"]["center"], $cube["D"]["center"], $cube["F"]["center"]);
}
function moveMp(&$cube)
{
  cycleP($cube["U"]["UF"], $cube["B"]["BU"], $cube["D"]["DB"], $cube["F"]["FD"]);
  cycleP($cube["F"]["FU"], $cube["U"]["UB"], $cube["B"]["BD"], $cube["D"]["DF"]);
  cycleP($cube["U"]["center"], $cube["B"]["center"], $cube["D"]["center"], $cube["F"]["center"]);
}
function moveM2(&$cube)
{
  cycleD($cube["U"]["UF"], $cube["B"]["BU"], $cube["D"]["DB"], $cube["F"]["FD"]);
  cycleD($cube["F"]["FU"], $cube["U"]["UB"], $cube["B"]["BD"], $cube["D"]["DF"]);
  cycleD($cube["U"]["center"], $cube["B"]["center"], $cube["D"]["center"], $cube["F"]["center"]);
}
function moveE(&$cube)
{
  cycle($cube["F"]["FR"], $cube["R"]["RB"], $cube["B"]["BL"], $cube["L"]["LF"]);
  cycle($cube["R"]["RF"], $cube["B"]["BR"], $cube["L"]["LB"], $cube["F"]["FL"]);
  cycle($cube["F"]["center"], $cube["R"]["center"], $cube["B"]["center"], $cube["L"]["center"]);
}
function moveEp(&$cube)
{
  cycleP($cube["F"]["FR"], $cube["R"]["RB"], $cube["B"]["BL"], $cube["L"]["LF"]);
  cycleP($cube["R"]["RF"], $cube["B"]["BR"], $cube["L"]["LB"], $cube["F"]["FL"]);
  cycleP($cube["F"]["center"], $cube["R"]["center"], $cube["B"]["center"], $cube["L"]["center"]);
}
function moveE2(&$cube)
{
  cycleD($cube["F"]["FR"], $cube["R"]["RB"], $cube["B"]["BL"], $cube["L"]["LF"]);
  cycleD($cube["R"]["RF"], $cube["B"]["BR"], $cube["L"]["LB"], $cube["F"]["FL"]);
  cycleD($cube["F"]["center"], $cube["R"]["center"], $cube["B"]["center"], $cube["L"]["center"]);
}
function moveS(&$cube)
{
  cycle($cube["U"]["UR"], $cube["R"]["RD"], $cube["D"]["DL"], $cube["L"]["LU"]);
  cycle($cube["R"]["RU"], $cube["D"]["DR"], $cube["L"]["LD"], $cube["U"]["UL"]);
  cycle($cube["U"]["center"], $cube["R"]["center"], $cube["D"]["center"], $cube["L"]["center"]);
}
function moveSp(&$cube)
{
  cycleP($cube["U"]["UR"], $cube["R"]["RD"], $cube["D"]["DL"], $cube["L"]["LU"]);
  cycleP($cube["R"]["RU"], $cube["D"]["DR"], $cube["L"]["LD"], $cube["U"]["UL"]);
  cycleP($cube["U"]["center"], $cube["R"]["center"], $cube["D"]["center"], $cube["L"]["center"]);
}
function moveS2(&$cube)
{
  cycleD($cube["U"]["UR"], $cube["R"]["RD"], $cube["D"]["DL"], $cube["L"]["LU"]);
  cycleD($cube["R"]["RU"], $cube["D"]["DR"], $cube["L"]["LD"], $cube["U"]["UL"]);
  cycleD($cube["U"]["center"], $cube["R"]["center"], $cube["D"]["center"], $cube["L"]["center"]);
}
function moveR(&$cube)
{
  cycle($cube["R"]["RUF"], $cube["R"]["RUB"], $cube["R"]["RDB"], $cube["R"]["RDF"]);
  cycle($cube["R"]["RU"], $cube["R"]["RB"], $cube["R"]["RD"], $cube["R"]["RF"]);

  cycle($cube["U"]["UBR"], $cube["B"]["BDR"], $cube["D"]["DFR"], $cube["F"]["FUR"]);
  cycle($cube["U"]["UR"], $cube["B"]["BR"], $cube["D"]["DR"], $cube["F"]["FR"]);
  cycle($cube["U"]["UFR"], $cube["B"]["BUR"], $cube["D"]["DBR"], $cube["F"]["FDR"]);
}
function moveRp(&$cube)
{
  cycleP($cube["R"]["RUF"], $cube["R"]["RUB"], $cube["R"]["RDB"], $cube["R"]["RDF"]);
  cycleP($cube["R"]["RU"], $cube["R"]["RB"], $cube["R"]["RD"], $cube["R"]["RF"]);

  cycleP($cube["U"]["UBR"], $cube["B"]["BDR"], $cube["D"]["DFR"], $cube["F"]["FUR"]);
  cycleP($cube["U"]["UR"], $cube["B"]["BR"], $cube["D"]["DR"], $cube["F"]["FR"]);
  cycleP($cube["U"]["UFR"], $cube["B"]["BUR"], $cube["D"]["DBR"], $cube["F"]["FDR"]);
}
function moveR2(&$cube)
{
  cycleD($cube["R"]["RUF"], $cube["R"]["RUB"], $cube["R"]["RDB"], $cube["R"]["RDF"]);
  cycleD($cube["R"]["RU"], $cube["R"]["RB"], $cube["R"]["RD"], $cube["R"]["RF"]);

  cycleD($cube["U"]["UBR"], $cube["B"]["BDR"], $cube["D"]["DFR"], $cube["F"]["FUR"]);
  cycleD($cube["U"]["UR"], $cube["B"]["BR"], $cube["D"]["DR"], $cube["F"]["FR"]);
  cycleD($cube["U"]["UFR"], $cube["B"]["BUR"], $cube["D"]["DBR"], $cube["F"]["FDR"]);
}
function moveRw(&$cube)
{
  moveR($cube);
  moveM($cube);
}
function moveRwp(&$cube)
{
  moveRp($cube);
  moveMp($cube);
}
function moveRw2(&$cube){
  moveR2($cube);
  moveM2($cube);
}
function moveL(&$cube)
{
  cycle($cube["L"]["LUF"], $cube["L"]["LDF"], $cube["L"]["LDB"], $cube["L"]["LUB"]);
  cycle($cube["L"]["LU"], $cube["L"]["LF"], $cube["L"]["LD"], $cube["L"]["LB"]);

  cycle($cube["U"]["UBL"], $cube["F"]["FUL"], $cube["D"]["DFL"], $cube["B"]["BDL"]);
  cycle($cube["U"]["UL"], $cube["F"]["FL"], $cube["D"]["DL"], $cube["B"]["BL"]);
  cycle($cube["U"]["UFL"], $cube["F"]["FDL"], $cube["D"]["DBL"], $cube["B"]["BUL"]);
}
function moveLp(&$cube)
{
  cycleP($cube["L"]["LUF"], $cube["L"]["LDF"], $cube["L"]["LDB"], $cube["L"]["LUB"]);
  cycleP($cube["L"]["LU"], $cube["L"]["LF"], $cube["L"]["LD"], $cube["L"]["LB"]);

  cycleP($cube["U"]["UBL"], $cube["F"]["FUL"], $cube["D"]["DFL"], $cube["B"]["BDL"]);
  cycleP($cube["U"]["UL"], $cube["F"]["FL"], $cube["D"]["DL"], $cube["B"]["BL"]);
  cycleP($cube["U"]["UFL"], $cube["F"]["FDL"], $cube["D"]["DBL"], $cube["B"]["BUL"]);
}
function moveL2(&$cube)
{
  cycleD($cube["L"]["LUF"], $cube["L"]["LDF"], $cube["L"]["LDB"], $cube["L"]["LUB"]);
  cycleD($cube["L"]["LU"], $cube["L"]["LF"], $cube["L"]["LD"], $cube["L"]["LB"]);

  cycleD($cube["U"]["UBL"], $cube["F"]["FUL"], $cube["D"]["DFL"], $cube["B"]["BDL"]);
  cycleD($cube["U"]["UL"], $cube["F"]["FL"], $cube["D"]["DL"], $cube["B"]["BL"]);
  cycleD($cube["U"]["UFL"], $cube["F"]["FDL"], $cube["D"]["DBL"], $cube["B"]["BUL"]);
}
function moveLw(&$cube)
{
  moveL($cube);
  moveMp($cube);
}
function moveLwp(&$cube)
{
  moveLp($cube);
  moveM($cube);
}
function moveLw2(&$cube){
  moveL2($cube);
  moveM2($cube);
}
function moveU(&$cube)
{
  cycle($cube["U"]["UBL"], $cube["U"]["UBR"], $cube["U"]["UFR"], $cube["U"]["UFL"]);
  cycle($cube["U"]["UB"], $cube["U"]["UR"], $cube["U"]["UF"], $cube["U"]["UL"]);

  cycle($cube["F"]["FUL"], $cube["L"]["LUB"], $cube["B"]["BUR"], $cube["R"]["RUF"]);
  cycle($cube["F"]["FU"], $cube["L"]["LU"], $cube["B"]["BU"], $cube["R"]["RU"]);
  cycle($cube["F"]["FUR"], $cube["L"]["LUF"], $cube["B"]["BUL"], $cube["R"]["RUB"]);
}
function moveUp(&$cube)
{
  cycleP($cube["U"]["UBL"], $cube["U"]["UBR"], $cube["U"]["UFR"], $cube["U"]["UFL"]);
  cycleP($cube["U"]["UB"], $cube["U"]["UR"], $cube["U"]["UF"], $cube["U"]["UL"]);

  cycleP($cube["F"]["FUL"], $cube["L"]["LUB"], $cube["B"]["BUR"], $cube["R"]["RUF"]);
  cycleP($cube["F"]["FU"], $cube["L"]["LU"], $cube["B"]["BU"], $cube["R"]["RU"]);
  cycleP($cube["F"]["FUR"], $cube["L"]["LUF"], $cube["B"]["BUL"], $cube["R"]["RUB"]);
}
function moveU2(&$cube)
{
  cycleD($cube["U"]["UBL"], $cube["U"]["UBR"], $cube["U"]["UFR"], $cube["U"]["UFL"]);
  cycleD($cube["U"]["UB"], $cube["U"]["UR"], $cube["U"]["UF"], $cube["U"]["UL"]);

  cycleD($cube["F"]["FUL"], $cube["L"]["LUB"], $cube["B"]["BUR"], $cube["R"]["RUF"]);
  cycleD($cube["F"]["FU"], $cube["L"]["LU"], $cube["B"]["BU"], $cube["R"]["RU"]);
  cycleD($cube["F"]["FUR"], $cube["L"]["LUF"], $cube["B"]["BUL"], $cube["R"]["RUB"]);
}
function moveUw(&$cube)
{
  moveU($cube);
  moveEp($cube);
}
function moveUwp(&$cube)
{
  moveUp($cube);
  moveE($cube);
}
function moveUw2(&$cube){
  moveU2($cube);
  moveE2($cube);
}
function moveF(&$cube)
{
  cycle($cube["F"]["FUL"], $cube["F"]["FUR"], $cube["F"]["FDR"], $cube["F"]["FDL"]);
  cycle($cube["F"]["FU"], $cube["F"]["FR"], $cube["F"]["FD"], $cube["F"]["FL"]);

  cycle($cube["U"]["UFL"], $cube["R"]["RUF"], $cube["D"]["DFR"], $cube["L"]["LDF"]);
  cycle($cube["U"]["UF"], $cube["R"]["RF"], $cube["D"]["DF"], $cube["L"]["LF"]);
  cycle($cube["U"]["UFR"], $cube["R"]["RDF"], $cube["D"]["DFL"], $cube["L"]["LUF"]);
}
function moveFp(&$cube)
{
  cycleP($cube["F"]["FUL"], $cube["F"]["FUR"], $cube["F"]["FDR"], $cube["F"]["FDL"]);
  cycleP($cube["F"]["FU"], $cube["F"]["FR"], $cube["F"]["FD"], $cube["F"]["FL"]);

  cycleP($cube["U"]["UFL"], $cube["R"]["RUF"], $cube["D"]["DFR"], $cube["L"]["LDF"]);
  cycleP($cube["U"]["UF"], $cube["R"]["RF"], $cube["D"]["DF"], $cube["L"]["LF"]);
  cycleP($cube["U"]["UFR"], $cube["R"]["RDF"], $cube["D"]["DFL"], $cube["L"]["LUF"]);
}
function moveF2(&$cube)
{
  cycleD($cube["F"]["FUL"], $cube["F"]["FUR"], $cube["F"]["FDR"], $cube["F"]["FDL"]);
  cycleD($cube["F"]["FU"], $cube["F"]["FR"], $cube["F"]["FD"], $cube["F"]["FL"]);

  cycleD($cube["U"]["UFL"], $cube["R"]["RUF"], $cube["D"]["DFR"], $cube["L"]["LDF"]);
  cycleD($cube["U"]["UF"], $cube["R"]["RF"], $cube["D"]["DF"], $cube["L"]["LF"]);
  cycleD($cube["U"]["UFR"], $cube["R"]["RDF"], $cube["D"]["DFL"], $cube["L"]["LUF"]);
}
function moveFw(&$cube)
{
  moveF($cube);
  moveS($cube);
}
function moveFwp(&$cube)
{
  moveFp($cube);
  moveSp($cube);
}
function moveFw2(&$cube){
  moveF2($cube);
  moveS2($cube);
}
function moveB(&$cube)
{
  cycle($cube["B"]["BUL"], $cube["B"]["BDL"], $cube["B"]["BDR"], $cube["B"]["BUR"]);
  cycle($cube["B"]["BU"], $cube["B"]["BL"], $cube["B"]["BD"], $cube["B"]["BR"]);

  cycle($cube["U"]["UBL"], $cube["L"]["LDB"], $cube["D"]["DBR"], $cube["R"]["RUB"]);
  cycle($cube["U"]["UB"], $cube["L"]["LB"], $cube["D"]["DB"], $cube["R"]["RB"]);
  cycle($cube["U"]["UBR"], $cube["L"]["LUB"], $cube["D"]["DBL"], $cube["R"]["RDB"]);
}
function moveBp(&$cube)
{
  cycleP($cube["B"]["BUL"], $cube["B"]["BDL"], $cube["B"]["BDR"], $cube["B"]["BUR"]);
  cycleP($cube["B"]["BU"], $cube["B"]["BL"], $cube["B"]["BD"], $cube["B"]["BR"]);

  cycleP($cube["U"]["UBL"], $cube["L"]["LDB"], $cube["D"]["DBR"], $cube["R"]["RUB"]);
  cycleP($cube["U"]["UB"], $cube["L"]["LB"], $cube["D"]["DB"], $cube["R"]["RB"]);
  cycleP($cube["U"]["UBR"], $cube["L"]["LUB"], $cube["D"]["DBL"], $cube["R"]["RDB"]);
}
function moveB2(&$cube)
{
  cycleD($cube["B"]["BUL"], $cube["B"]["BDL"], $cube["B"]["BDR"], $cube["B"]["BUR"]);
  cycleD($cube["B"]["BU"], $cube["B"]["BL"], $cube["B"]["BD"], $cube["B"]["BR"]);

  cycleD($cube["U"]["UBL"], $cube["L"]["LDB"], $cube["D"]["DBR"], $cube["R"]["RUB"]);
  cycleD($cube["U"]["UB"], $cube["L"]["LB"], $cube["D"]["DB"], $cube["R"]["RB"]);
  cycleD($cube["U"]["UBR"], $cube["L"]["LUB"], $cube["D"]["DBL"], $cube["R"]["RDB"]);
}
function moveBw(&$cube)
{
  moveB($cube);
  moveSp($cube);
}
function moveBwp(&$cube)
{
  moveBp($cube);
  moveS($cube);
}
function moveBw2(&$cube){
  moveB2($cube);
  moveS2($cube);
}
function moveD(&$cube)
{
  cycle($cube["D"]["DBL"], $cube["D"]["DFL"], $cube["D"]["DFR"], $cube["D"]["DBR"]);
  cycle($cube["D"]["DB"], $cube["D"]["DL"], $cube["D"]["DF"], $cube["D"]["DR"]);

  cycle($cube["F"]["FDL"], $cube["R"]["RDF"], $cube["B"]["BDR"], $cube["L"]["LDB"]);
  cycle($cube["F"]["FD"], $cube["R"]["RD"], $cube["B"]["BD"], $cube["L"]["LD"]);
  cycle($cube["F"]["FDR"], $cube["R"]["RDB"], $cube["B"]["BDL"], $cube["L"]["LDF"]);
}
function moveDp(&$cube)
{
  cycleP($cube["D"]["DBL"], $cube["D"]["DFL"], $cube["D"]["DFR"], $cube["D"]["DBR"]);
  cycleP($cube["D"]["DB"], $cube["D"]["DL"], $cube["D"]["DF"], $cube["D"]["DR"]);

  cycleP($cube["F"]["FDL"], $cube["R"]["RDF"], $cube["B"]["BDR"], $cube["L"]["LDB"]);
  cycleP($cube["F"]["FD"], $cube["R"]["RD"], $cube["B"]["BD"], $cube["L"]["LD"]);
  cycleP($cube["F"]["FDR"], $cube["R"]["RDB"], $cube["B"]["BDL"], $cube["L"]["LDF"]);
}
function moveD2(&$cube)
{
  cycleD($cube["D"]["DBL"], $cube["D"]["DFL"], $cube["D"]["DFR"], $cube["D"]["DBR"]);
  cycleD($cube["D"]["DB"], $cube["D"]["DL"], $cube["D"]["DF"], $cube["D"]["DR"]);

  cycleD($cube["F"]["FDL"], $cube["R"]["RDF"], $cube["B"]["BDR"], $cube["L"]["LDB"]);
  cycleD($cube["F"]["FD"], $cube["R"]["RD"], $cube["B"]["BD"], $cube["L"]["LD"]);
  cycleD($cube["F"]["FDR"], $cube["R"]["RDB"], $cube["B"]["BDL"], $cube["L"]["LDF"]);
}
function moveDw(&$cube)
{
  moveD($cube);
  moveE($cube);
}
function moveDwp(&$cube)
{
  moveDp($cube);
  moveDp($cube);
}
function moveDw2(&$cube){
  moveD2($cube);
  moveD2($cube);
}