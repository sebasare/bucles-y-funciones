<?php
include('funciones.php');

echo("clase 4 bucles, arreglos y funciones");
//array indexado (php asigna el clave por defecto)
$arreglo=array("juan","maria","james","sandra");
echo("<br>");
print_r($arreglo);
echo("<br>..........................");
//array asociativo(clave asignada por el programador)

$arreglo=array('user1'=>"juan",'user2'=>"maria",'user3'=>"james",'user4'=>"sandra");
print_r($arreglo);
echo("<br>..........................");
//tamano del arreglo
$tamano=count($arreglo);
echo("<br>");
echo $tamano;
echo("<br>");
//bucle for.. :quiero imprimir en pantalla los numeros del 1 al 10 // variable centinela para poner limites-- inicio-- final del ciclo
echo("imprimir en pantalla los numeros del 1 al 10:");
echo("<br>");
for($i=1; $i<=10; $i++){
    print($i."<br>");
    echo("<br>");
}
    $arreglo=array("juan","maria","james","sandra");
for($centinela=0;$centinela<count($arreglo
);$centinela++){
       echo($arreglo[$centinela]."br");
   }
   echo("<br>");
   //bucle foreach  para recorrer arreglos
   $arreglo=array('user1'=>"juan",'user2'=>"maria",'user3'=>"james",'user'=>"sandra");
   foreach($arreglo as $clave=>$valor){
       echo "la clave es: ".$clave."<br>";
       echo"<br>".($valor)."<br>";
   }

   //bucle foreach para arreglo indexado
   echo"<br>";
   $arreglo=array("juan","maria","james","sandra");
   foreach($arreglo as $valor){
       echo "<br> el valor del cajon es: ".$valor;
   }

   echo"<br>";
   $arreglo=array("juan","maria","james","sandra");
   foreach($arreglo as $clave=>$valor){
       echo "<br> la clave del cajon es: ".$clave;
       echo "<br> el valor del cajon es: ".$valor;
   }

   //arreglo multidimencional(arreglo de arreglos)

   $usuarios=array(

    'usuario1'=>array('nombre'=>"juan",'edad'=>30,'sexo'=>"masculino"),
    'usuario2'=>array('nombre'=>"maria",'edad'=>20,'sexo'=>"femenino"),
    'usuario3'=>array('nombre'=>"james",'edad'=>27,'sexo'=>"masculino"),
    'usuario4'=>array('nombre'=>"sandra",'edad'=>23,'sexo'=>"femenino"),
   );
   echo"<br>";
   echo"<br>";
   print_r($usuarios);
   //ciclo foreach para acceder a los elementos del arreglo multidimencional
   echo"<br>";
   echo"<br>";
   foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales){
       print_r($clavesArreglosUnidimensionales);
       echo"<br>";
       print_r($arreglosUnidimensionales);
       echo"<br>";
       echo"<br>";
       
       foreach($arreglosUnidimensionales as $claves=>$valores){
            echo"<br>";
            echo($claves).": "; echo"<br>";
            echo($valores); echo"<br>";
            echo"<br>";
        
       }
   }
 
   //declarar la funcion
   //asignar parametros-(variables que necesita la funcion para poder trabajar)

   //calcular la edad de dos personas
   echo"<br>..................................<br>";
   calcularEdad(1995);
   echo"<br>..................................<br>";
   calcularEdad2(1995,1996);
   echo"<br>..................................<br>";
   $edad3= calcularEdad3(1990,2020);
   echo("la edad de la persona es : ".$edad3);

   //arreglo que se llena con una funcion
   echo"<br>...................................<br>";
   $edades=array('edad1'=>calcularEdad3(1990,2020),'edad2'=>calcularEdad3(1991,2020));
   echo"<br>";
   print_r($edades);
   


?>