<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej. 1 Arrays</title>
</head>
<body>
    <?php
        $lista = array();
        $i = 1;
        while(count($lista) < 20){
            if($i % 2 != 0){
                array_push($lista,$i);
            }
            $i++;
        }
        // var_dump($lista);
    ?>
    <center>
    <table border='1'>
        <thead>
            <th>Indice</th>
            <th>Valor</th>
            <th>Suma</th>
        </thead>
        <?php
        foreach($lista as $i => $n){
            $suma = $i + $n;
            echo "<tr>";
            echo "<td>". $i . "</td>";
            echo "<td>". $n . "</td>";
            echo "<td>". $suma . "</td>";
            echo "</tr>";
        }

        ?>
    </table>
    </center>
</body>
</html>