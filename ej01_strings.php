<html>
<header><title>Ej. 1 print</title></header>
<body>
<?php
$ip="192.18.16.204";
$ip_split = explode(".",$ip);
$ip_bin = "";
for($i = 0; $i < count($ip_split); $i++){
	//convierto cada elemento en binario (sprintf), despues en string (strval) y lo concateno
	$ip_bin = $ip_bin . strval(sprintf("%b",$ip_split[$i])) . ".";
	
}
// quito el punto final
$ip_bin = rtrim($ip_bin, ".");
echo "<center>la ip " . $ip . " en binario es " . $ip_bin."</center>";

?>
</body>
</html>
