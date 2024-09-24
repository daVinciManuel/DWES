<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej. 2 Arrays</title>
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

            $sumaPar = 0;
            $sumaImpar = 0;
            $countPar = 0;
            $countImpar = 0;
        foreach($lista as $i => $n){
            $suma = $i + $n;
            if($i % 2 == 0){
                // var_dump($countPar);
                $countPar += 1;
                $sumaPar += $i + $n + $suma;
            }else{
                // var_dump($countImpar);
                $countImpar += 1;
                $sumaImpar += $i + $n + $suma;
            }
        }
        $mediaPar = $sumaPar / $countPar;
        $mediaImpar = $sumaImpar / $countImpar;
        // var_dump($mediaImpar);
        // var_dump($mediaPar);
        // var_dump($lista);
    ?>
    <center>
    <table border='1'>
        <thead>
            <th>Indice</th>
            <th>Valor</th>
            <th>Suma</th>
            <th>Media Pares</th>
            <th>Media Impares</th>
        </thead>
        <?php
        foreach($lista as $i => $n){
            $suma = $i + $n;
            echo "<tr>";
            echo "<td>". $i . "</td>";
            echo "<td>". $n . "</td>";
            echo "<td>". $suma . "</td>";
            if(count($lista)-1 == $i){
                echo "<td>". $mediaPar . "</td>";
                echo "<td>". $mediaImpar. "</td>";
            }else{
                echo "<td>". "</td>";
                echo "<td>". "</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>
    </center>
</body>
</html>