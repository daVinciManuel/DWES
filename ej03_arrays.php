<html>
<header><title>Ej. 3 Arrays</title></header>
<body>
<?php
$number = array();
for($i = 0; $i<20; $i++){
	array_push($number,decbin($i));
}
?>
 <center>

	<table border=1>
		<thead>
			<th>Indice</th>
			<th>Binario</th>
			<th>Octal</th>
		</thead>
		<?php
		$o = 0;
			foreach($number as $i => $n){
				echo "<tr>";
				echo "<td>". $i."</td>";
				echo "<td>". $n."</td>";
				$o = decoct($i);
				echo "<td>". $o ."</td>";
				echo "</tr>";
			}
		?>


	</table>
 </center>
</body>
</html>
