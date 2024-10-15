<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros 1</title>
</head>
<body>
    <center>

    <h1>Ficheros 1</h1>
    <hr>
    <h2>Datos:</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="name">Nombre:</label><br>
        <input type="text" name="name"><br>
        <label for="lastName">Apellido 1:</label><br>
        <input type="text" name="lastName"><br>
        <label for="lastName2">Apellido 2:</label><br>
        <input type="text" name="lastName2"><br>
        <label for="birthDate">Fecha de Nacimiento: (DD/MM/AAAA)</label><br>
        <input type="text" name="birthDate"><br>
        <label for="place">localidad:</label><br>
        <input type="text" name="place"><br>
        <input type="submit" value="Enviar"><br>
        <input type="reset" value="Reset"><br>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $lastName2 = $_POST['lastName2'];
        $birthDate = $_POST['birthDate'];
        $place = $_POST['place'];
        var_dump($_POST);

        //abro (y/o creo) el fichero
        $f1 = fopen("alumnos1.txt","a+");
        // relleno espacios para completar el formato
        $nameToPrint = str_pad($name,40," ");
        $lastNameToPrint = str_pad($lastName,41," ");
        $lastName2ToPrint = str_pad($lastName2,42," ");
        $birthDateToPrint = str_pad($birthDate,10," ");
        $placeToPrint = str_pad($place,27," ");

        $alumno = "\n".$nameToPrint.$lastNameToPrint.$lastName2ToPrint.$birthDateToPrint.$placeToPrint;

        fwrite($f1,$alumno);
    }


    ?>
    
    </center>
</body>
</html>