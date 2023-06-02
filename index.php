<?php  
// print "Hola Mundo";
// echo "hola Mundito";
$nombre = "hola mama";
const escuela = "Maria Jose";
define("direccion","rio limay");
$edad =  20;
$promedio = 2.5;
$esAlumno = true;
$Nombre = "lucas";

echo $nombre ," ", $edad, " " , $promedio , " ", $Nombre, escuela , direccion;

?>


<?php 
$data = "datazos";
echo gettype($data);
$data = 9.5;
echo gettype($data);

?>

<?php
$palabra = "buenas";
$facilito = "tardes";
$tardecito = "noches";

//concatenar string
echo $palabra.$facilito;
//interpolacion string
echo "hola $palabra $facilito";
// con llaves
echo "hola {$palabra} gente";


?> 

<!-- comillas  -->
<?php 
$saludo =  "hola";

echo " $saludo Lucas Bienvenido";
//si no usamos variables mejor usar comillas simples, ya q el interprete no las esta leyendo 
echo ' $saludo Lucas Bienvenido';

//comillas dobles
echo "lucas \"dijo\" q se va de casa"
?>

<!-- heredoc -->

<?php 
$saludo = "buenas";
echo <<<Frase
$saludo
No cuentas con los dias nublados paapaa
Frase;
?>

<!-- nowdoc -->
<?php 
$saludo = "buenas";
$frase= <<<'Frase'
$saludo
No cuentas con los dias nublados paapaa
Frase;
echo $frase;
?>

<?php
$apellido = substr("Martinez Mendez Gallego",8,6);
echo $apellido; 
?>

<!-- susbtraer palabras de un string -->

<?php 
$bienvenida = "bienvenidos al mundo de la programacion";
$palabra ="programacion";
$buscar = strpos ($bienvenida,$palabra);
$extracion = substr ($bienvenida,$buscar);
echo $extracion;
?>

<!-- reemplazar y formato -->

<?php 
$RFC = "91 75 1A EC C7";
$buscar= " ";
$reemplazar = ";";
$resultado= str_replace($buscar,$reemplazar,$RFC);
echo $resultado;
?>

<!-- operador nave espacial   1A
<=>
0 ambis vakires sean igual
-1 esvalor es menor
1 el valor es mayor

-->
<?php 
$edad = 3;

var_dump($edad <=>6);
?>

<!-- operador elvis y fusion null -->
<?php 
$valores = 8;
$aprobo = ($valores)?:5;
echo $aprobo;
// si el dato de valores es null me vas devolver 5
?>