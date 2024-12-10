<?php
require "./db/queries.php";
include "./view/errorMsg.php";
function verifyLogin($username,$password){
   $login = false;
   // revisa que los campos no esten vacios
   if(strlen($username) > 0 && strlen($password) > 0){
   // revisa que el nombre de usuario esta en la base de datos
    if(userExists($username)){
      // revisa que el password se corresponde con el usuario dado 
      if(correctPassword($username,$password)){
         $login = true;
         $_SESSION["username"] = $username;
         $_SESSION["password"] = $password;

         // crea cookie de session
      }else{
         // se ha equivocado de password.

         // Tiene 3 intentos (count starts here)
         $limitAttempts = 3;
         if(!isset($_COOKIE["loginAttempts"])){
            setCookie("loginAttempts",1,time()+120,"/");
            showAttempts($limitAttempts);
         }else{
            $count = $_COOKIE["loginAttempts"];
            $attemptsLeft = $limitAttempts - $count;
            showAttempts($attemptsLeft);
            if($count < $limitAttempts + 1){
               $count += 1;
               setCookie("loginAttempts",$count,time()+120,"/");
            }
            if($_COOKIE["loginAttempts"] > 2){
               header('Location: https://google.com');
            }

         }
      }
    }else{
      // usuario no existe. Intentelo de nuevo
      showAlertUserNoExists();
      // elimino la cookie que cuenta intentos fallidos de login con un usuario
      if(isset($_COOKIE["loginAttempts"])){
         setCookie("loginAttempts",0,time()-99999,"/");
      }
    }
   }else{
      // Rellene los campos Username y Password
      showAlertLoginFormIsEmpty();
      // elimino la cookie que cuenta intentos fallidos de login con un usuario
      if(isset($_COOKIE["loginAttempts"])){
         setCookie("loginAttempts",0,time()-99999,"/");
      }
   }
   return $login;
}
?>