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