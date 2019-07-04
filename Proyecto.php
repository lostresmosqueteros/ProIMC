<?php /* Created on: 30/06/2019 */ ?>
<html> 
<head> 
<link rel="StyleSheet" type="text/css" href="CSS/estilo2.css">
</head>
<body> 

<?php 

$Altura= $_POST {"Estatura"};
$Peso= $_POST {"Kilogramos"};
$Selec= $_POST {"Seleccion"};
echo "Su peso es:" ,$Peso;
;
echo "kg."."<br>";
$Indice= $Peso / ($Altura* $Altura);
echo $Indice; 
if ($Selec == "Masculino"){

if ($Indice<=17){
echo "su indice es: de infrapeso";
echo'<img src="IMAGENES/anorexia-hombres-02.jpg" width="200" height="200" alt="" border="0">';
}
else if (($Indice >17) and ($Indice<=18)){
echo "su Indice es: de bajo peso";
}
else if (($Indice >18) and ($Indice<=25)){
echo " su Indice es: de peso normal-saludable-"; 
echo'<img src="IMAGENES/images.jpg" width="200" height="200" alt="" border="0"> ';
}
else if (($Indice >25) and ($Indice<=30)){
echo "su Indice es: de sobre peso-obesidad de grado I";
}
else if (($Indice >30) and ($Indice<=35)){
echo "su Indice es: de sobre peso-obesidad de grado II";
}
else if (($Indice >35) and ($Indice<=40)){
echo  "su Indice es: de sobre peso-obesidad de grado III";
}
else if ($Indice >40) {
echo "su Indice es: obesidad-obesidad de grado IV";	
echo'<img src="IMAGENES/barriga.jpeg" width="200" height="200" alt="" border="0">';
}
 }
 else{
 if ($Selec == "Femenino"){

if ($Indice<=17){
echo "su indice es: de infrapeso";
 echo '<img src="IMAGENES/medida-cintura-delgada.jpg.jpg" width="200" height="200" alt="" border="0">'	;
}
else if (($Indice >17) and ($Indice<=18)){
echo "su Indice es: de bajo peso";
}
else if (($Indice >18) and ($Indice<=25)){
echo " su Indice es: de peso normal-saludable-"; 
echo'<img src="IMAGENES/crossfit-para-novatos.jpg" width="200" height="200" alt="" border="0">';
}
else if (($Indice >25) and ($Indice<=30)){
echo "su Indice es: de sobre peso-obesidad de grado I";
}
else if (($Indice >30) and ($Indice<=35)){
echo "su Indice es: de sobre peso-obesidad de grado II";
}
else if (($Indice >35) and ($Indice<=40)){
echo  "su Indice es: de sobre peso-obesidad de grado III";
}
else if ($Indice >40) {
echo "su Indice es: obesidad-obesidad de grado IV";	
echo'<img src="IMAGENES/201443.jpeg" width="200" height="200" alt="" border="0">' ;
}
 }
 
 }
 
?>

</body>
</html>
