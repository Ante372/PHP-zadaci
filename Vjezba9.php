<?php
function ducan($stanje="otvoren"){

    $day=date("D");
    $hours=date("H");
    $minutes=date("i");
    echo "<h1>Dućan</h1>
    <p>Sada je dan ".$day. " sati i ". $hours . " minuta " . $minutes . " minuta</p>";
    if($hours >=20 || $hours<=8){echo "<p>Dućan je zatvoren</p>";}
    else if($day=="Sun"){echo "<p>Dućan je zatvoren</p>";}
    else if($day=="Sat && $hours<=9 || $hours>=14"){echo "<p>Dućan je zatvoren</p>";}
    else {echo "<p>Dućan je $stanje</p>";}
}
ducan()

?>