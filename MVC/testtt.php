<?php
$esc = count($json[$i]['route']);
if($esc == 1){
  $toEcho = $toEcho . " ZBOR DIRECT";
  if($json[$i]['airlines'][0] == "FR"){
    echo "<a href = \"" . FR.$json[$i]['routes'][0][0]. "/".$json[$i]['routes'][0][1] ."/" . $dateForFR . "//" . "1/0/0/0\">". $toEcho . "</a>";
      echo "<br><br>";
  }
  else if($json[$i]['airlines'][0] == "W6"){
    echo "<a href = \"" . W6.$json[$i]['routes'][0][0]. "/".$json[$i]['routes'][0][1] ."/" . $dateForFR . "/null" . "/1/0/0/0\">". $toEcho . "</a>";
      echo "<br><br>";
  }
}
else{
  $esc = $esc-1;
  $toEcho = $toEcho . " cu " . $esc . " escale: ";
  for($j=0;$j<count($json[$i]['route'])-1; $j=$j+1)
    $toEcho = $toEcho . $json[$i]['route'][$j]['cityTo'] . "  ";
    echo $toEcho;
}

function escale($json){
  $toEcho = "";
  $esc = $json['route'];
  if($esc == 1){
    $toEcho = $toEcho . " Zbor direct";
    $this->getLink();
  } else{
    $esc = $esc-1;
    $toEcho = $toEcho . " cu escala la: ";
    for($j=0;$j<count($json['route'])-1; $j=$j+1)
      $toEcho = $toEcho . $json['route'][$j]['cityTo'] . "  ";
  }

}


function getLink($json){
  $link = "";
  if($json['airlines'][0] == "FR"){
    $link = "\"" . FR .$json['routes'][0][0]. "/".$json['routes'][0][1] ."/" . $dateForFR . "//" . "1/0/0/0\"";
      $link = $link .  "<br><br>";
  }
  else if($json['airlines'][0] == "W6"){
    $link = "\"" . W6 .$json['routes'][0][0]. "/".$json['routes'][0][1] ."/" . $dateForFR . "/null" . "/1/0/0/0\"";
    $link = $link .  "<br><br>";
  }
}
