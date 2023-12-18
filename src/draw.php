<?php
function drawUSide($cube)
{
  echo "
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['U']['UBL'][0] . ">
          </td>
          <td class=" . $cube['U']['UB'][0] . ">
          </td>
          <td class=" . $cube['U']['UBR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['U']['UL'][0] . ">
          </td>
          <td class=" . $cube['U']['center'][0] . ">
          </td>
          <td class=" . $cube['U']['UR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['U']['UFL'][0] . ">
          </td>
          <td class=" . $cube['U']['UF'][0] . ">
          </td>
          <td class=" . $cube['U']['UFR'][0] . ">
        </tr>
      </tbody>
    </table>
    </div>";
}
;
function drawFSide($cube)
{
  echo "
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['F']['FUL'][0] . ">
          </td>
          <td class=" . $cube['F']['FU'][0] . ">
          </td>
          <td class=" . $cube['F']['FUR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['F']['FL'][0] . ">
          </td>
          <td class=" . $cube['F']['center'][0] . ">
          </td>
          <td class=" . $cube['F']['FR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['F']['FDL'][0] . ">
          </td>
          <td class=" . $cube['F']['FD'][0] . ">
          </td>
          <td class=" . $cube['F']['FDR'][0] . ">
        </tr>
      </tbody>
    </table>
    </div>";
}
;
function drawRSide($cube)
{
  echo "
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['R']['RUF'][0] . ">
          </td>
          <td class=" . $cube['R']['RU'][0] . ">
          </td>
          <td class=" . $cube['R']['RUB'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['R']['RF'][0] . ">
          </td>
          <td class=" . $cube['R']['center'][0] . ">
          </td>
          <td class=" . $cube['R']['RB'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['R']['RDF'][0] . ">
          </td>
          <td class=" . $cube['R']['RD'][0] . ">
          </td>
          <td class=" . $cube['R']['RDB'][0] . ">
        </tr>
      </tbody>
    </table>
    </div>";
}
;
function drawBSide($cube)
{
  echo "
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['B']['BUR'][0] . ">
          </td>
          <td class=" . $cube['B']['BU'][0] . ">
          </td>
          <td class=" . $cube['B']['BUL'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['B']['BR'][0] . ">
          </td>
          <td class=" . $cube['B']['center'][0] . ">
          </td>
          <td class=" . $cube['B']['BL'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['B']['BDR'][0] . ">
          </td>
          <td class=" . $cube['B']['BD'][0] . ">
          </td>
          <td class=" . $cube['B']['BDL'][0] . ">
        </tr>
      </tbody>
    </table>
    </div>";
}
;
function drawLSide($cube)
{
  echo "
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['L']['LUB'][0] . ">
          </td>
          <td class=" . $cube['L']['LU'][0] . ">
          </td>
          <td class=" . $cube['L']['LUF'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['L']['LB'][0] . ">
          </td>
          <td class=" . $cube['L']['center'][0] . ">
          </td>
          <td class=" . $cube['L']['LF'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['L']['LDB'][0] . ">
          </td>
          <td class=" . $cube['L']['LD'][0] . ">
          </td>
          <td class=" . $cube['L']['LDF'][0] . ">
        </tr>
      </tbody>
    </table>
    </div>";
}
;
function drawDSide($cube)
{
  echo "<html>

  <head>
    <link rel='stylesheet' href='style.css'>
  </head>
  
  <body>
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['D']['DFL'][0] . ">
          </td>
          <td class=" . $cube['D']['DF'][0] . ">
          </td>
          <td class=" . $cube['D']['DFR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['D']['DL'][0] . ">
          </td>
          <td class=" . $cube['D']['center'][0] . ">
          </td>
          <td class=" . $cube['D']['DR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['D']['DBL'][0] . ">
          </td>
          <td class=" . $cube['D']['DB'][0] . ">
          </td>
          <td class=" . $cube['D']['DBR'][0] . ">
        </tr>
      </tbody>
    </table>
    </div>";
}
;

function drawCube($cube)
{
  echo "<html>

  <head>
    <link rel='stylesheet' href='style.css'>
  </head>
  
  <body>
    <div class = layer>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['U']['UBL'][0] . ">
          </td>
          <td class=" . $cube['U']['UB'][0] . ">
          </td>
          <td class=" . $cube['U']['UBR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['U']['UL'][0] . ">
          </td>
          <td class=" . $cube['U']['center'][0] . ">
          </td>
          <td class=" . $cube['U']['UR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['U']['UFL'][0] . ">
          </td>
          <td class=" . $cube['U']['UF'][0] . ">
          </td>
          <td class=" . $cube['U']['UFR'][0] . ">
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <tbody>
        <tr>
          <td class=" . $cube['F']['FUL'][0] . ">
          </td>
          <td class=" . $cube['F']['FU'][0] . ">
          </td>
          <td class=" . $cube['F']['FUR'][0] . ">
          </td>
          <td class=" . $cube['R']['RUF'][0] . ">
          </td>
          <td class=" . $cube['R']['RU'][0] . ">
          </td>
          <td class=" . $cube['R']['RUB'][0] . ">
          </td>
          <td class=" . $cube['B']['BUR'][0] . ">
          </td>
          <td class=" . $cube['B']['BU'][0] . ">
          </td>
          <td class=" . $cube['B']['BUL'][0] . ">
          </td>
          <td class=" . $cube['L']['LUB'][0] . ">
          </td>
          <td class=" . $cube['L']['LU'][0] . ">
          </td>
          <td class=" . $cube['L']['LUF'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['F']['FL'][0] . ">
          </td>
          <td class=" . $cube['F']['center'][0] . ">
          </td>
          <td class=" . $cube['F']['FR'][0] . ">
          </td>
          <td class=" . $cube['R']['RF'][0] . ">
          </td>
          <td class=" . $cube['R']['center'][0] . ">
          </td>
          <td class=" . $cube['R']['RB'][0] . ">
          </td>
          <td class=" . $cube['B']['BR'][0] . ">
          </td>
          <td class=" . $cube['B']['center'][0] . ">
          </td>
          <td class=" . $cube['B']['BL'][0] . ">
          </td>
          <td class=" . $cube['L']['LB'][0] . ">
          </td>
          <td class=" . $cube['L']['center'][0] . ">
          </td>
          <td class=" . $cube['L']['LF'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['F']['FDL'][0] . ">
          </td>
          <td class=" . $cube['F']['FD'][0] . ">
          </td>
          <td class=" . $cube['F']['FDR'][0] . ">
          </td>
          <td class=" . $cube['R']['RDF'][0] . ">
          </td>
          <td class=" . $cube['R']['RD'][0] . ">
          </td>
          <td class=" . $cube['R']['RDB'][0] . ">
          </td>
          <td class=" . $cube['B']['BDR'][0] . ">
          </td>
          <td class=" . $cube['B']['BD'][0] . ">
          </td>
          <td class=" . $cube['B']['BDL'][0] . ">
          </td>
          <td class=" . $cube['L']['LDB'][0] . ">
          </td>
          <td class=" . $cube['L']['LD'][0] . ">
          </td>
          <td class=" . $cube['L']['LDF'][0] . ">
        </tr>
      </tbody>
    </table>

    <table>
      <tbody>
        <tr>
          <td class=" . $cube['D']['DFL'][0] . ">
          </td>
          <td class=" . $cube['D']['DF'][0] . ">
          </td>
          <td class=" . $cube['D']['DFR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['D']['DL'][0] . ">
          </td>
          <td class=" . $cube['D']['center'][0] . ">
          </td>
          <td class=" . $cube['D']['DR'][0] . ">
          </td>
        </tr>
        <tr>
          <td class=" . $cube['D']['DBL'][0] . ">
          </td>
          <td class=" . $cube['D']['DB'][0] . ">
          </td>
          <td class=" . $cube['D']['DBR'][0] . ">
        </tr>
      </tbody>
    </table>
  </div>";
}