<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 //Uso de algunas funciones personalizadas:
 function CalcularArea($radio){
    
    return $area= $radio*$radio;

  }
 print("¿Cual es el área del círculo?". "<br>");
 print(CalcularArea($radio=5));

 print("<br>");
 print("--------------------------------------------------");
 print("<br>");
 
 function EdadTrabajar($edad){

   if($edad>=16){
    print("Puedes trabajar");
   }else{
    print("No puedes trabajar todavía");
   }
  
 }

 print("¿Si tengo 21 años puedo trabajar?". "<br>");

 print(EdadTrabajar($edad=21));

 


?>
    
</body>
</html>