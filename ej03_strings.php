<HTML>
<HEAD><TITLE> EJ2-Direccion Red – Broadcast y Rango</TITLE></HEAD>
<BODY>
<?php
// $ip="192.168.16.100/21";
$ip="10.33.15.100/8";
// Mascara:
$slashPos = strrpos($ip, "/");
$mask = substr($ip, $slashPos + 1);

// Direccion de Red:
$ip_only = substr($ip,0,$slashPos);
$ip_splitted = explode(".",$ip_only);
$ip_binArr = array_map("ipToBin",$ip_splitted);
$ip_bin = implode("",$ip_binArr);
$ip_red = substr($ip_bin,0,$mask);
// var_dump($ip_red);
while(strlen($ip_red) < 32){
    $ip_red = $ip_red . "0";
}
// $ip_redArr = substr($ip_red,0,8) . ".". substr($ip_red,8,8) . ".". substr($ip_red,16,8) . ".". substr($ip_red,24,8) . ".";
$ip_redArr = array(substr($ip_red,0,8) , substr($ip_red,8,8) , substr($ip_red,16,8) , substr($ip_red,24,8) );
$ip_red = implode(".",array_map("ipToDec",$ip_redArr));
// var_dump($ip_red);
// Direccion de Broadcast:
$ip_only = substr($ip,0,$slashPos);
$ip_splitted = explode(".",$ip_only);
$ip_binArr = array_map("ipToBin",$ip_splitted);
$ip_bin = implode("",$ip_binArr);
$ip_brd = substr($ip_bin,0,$mask);
// var_dump($ip_brd);
while(strlen($ip_brd) < 32){
    $ip_brd = $ip_brd . "1";
}
// $ip_redArr = substr($ip_red,0,8) . ".". substr($ip_red,8,8) . ".". substr($ip_red,16,8) . ".". substr($ip_red,24,8) . ".";
$ip_brdArr = array(substr($ip_brd,0,8) , substr($ip_brd,8,8) , substr($ip_brd,16,8) , substr($ip_brd,24,8) );
$ip_brd = implode(".",array_map("ipToDec",$ip_brdArr));
// var_dump($ip_brd);

// Rango:
$number =  substr($ip_red,strrpos($ip_red,".")+1) + 1;
$ip_rangoA = substr($ip_red,0,strrpos($ip_red,".")) . "." . $number;
// var_dump($ip_rangoA);

$numberB = substr($ip_brd,strrpos($ip_brd,".") + 1) - 1;
$ip_rangoB = substr($ip_brd,0,strrpos($ip_brd,".")) . "." . $numberB;
// var_dump($ip_rangoB);

echo "IP ". $ip;
echo "<br> Mascara: ".$mask;
echo "<br> Direccion de Red: ". $ip_red;
echo "<br> Direccion de Broadcast: " . $ip_brd ;
echo "<br> Rango: " . $ip_rangoA . " a " . $ip_rangoB ;

function ipToBin($a){
    // convierte a binario
    $b = decbin($a);
    // agrega 0's a la izquierda
    while(strlen($b) < 8){
        $b = "0" . $b;
    }
    return $b;
}
function ipToDec($a){
    // convierte a binario
    $b = bindec($a);
    // agrega 0's a la izquierda
    return $b;
}

?>
</BODY>
</HTML>
