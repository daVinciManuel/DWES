<html>
    <head><title>Ej. 2 </title></head>
    <body>
<?php
$ip="192.18.16.204";
function ipbin($a){
    return decbin($a);
}
$ip_array = explode(".", $ip);
$ip_arrayBin = array_map("ipbin",$ip_array);
$ipBin = "";

for($i=0; $i < count($ip_arrayBin); $i++){
    while(strlen($ip_arrayBin[$i]) < 8){
        $ip_arrayBin[$i] = "0" . $ip_arrayBin[$i];
    }
    $ipBin = $ipBin . $ip_arrayBin[$i] . ".";
}
$ipBin = rtrim($ipBin, ".");
// echo "el numero " . $ip_arrayBin[1] . " tiene " . strlen($ip_arrayBin[1]) . " digitos";
echo "<br> la ip " . $ip . " en binario es " . $ipBin;
?>
    </body>
</html>