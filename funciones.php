<?php
//funcion para calcular la edad de una persona
 //declarar la funcion
 //asignar parametros-(variables que necesita la funcion para poder trabajar)

 function calcularEdad($nacimiento){
     $edad=(2020-$nacimiento);
     echo("la edad de la persona es : ".$edad);

 }

 function calcularEdad2($nacimiento,$actual){
     $edad=($actual-$nacimiento);
     echo("la edad de la persona es : ".$edad);
 }

 function calcularEdad3($nacimiento,$actual){
     $edad=$actual-$nacimiento;
     return ($edad);
 }








?>