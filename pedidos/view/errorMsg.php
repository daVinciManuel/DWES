<?php
function showAttempts($n){
    echo "<p><b>Clave incorrecta. Quedan ". $n." intentos.</b></p>";
}
function showAlertUserNoExists(){
    echo "<script>alert('usuario no existe. Intentelo de nuevo')</script>";
}
function showAlertLoginFormIsEmpty(){
    echo "<script>alert('Rellene los campos Username y Password')</script>";
}