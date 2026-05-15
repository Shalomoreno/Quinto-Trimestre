<? php
// Todo el código PHP va entre estas etiquetas
echo 'Hola Mundo';

// Comentario de una línea
/* Comentario
de múltiples líneas */

echo "<h1>Bienvenido a PHP</h1>";

// Las variables comienzan con el signo $
$nombre
$edad
$precio
$activo

// Uso de variables
echo "Hola, " . $nombre;
echo "Tienes " . $edad . " años";

$nombre = 'Juan'; //String
= 25;  // Integer
= 19.99;  // Float 
= true;  // Boolean


//CONDICIONALES
$edad = 20;
if ($edad >= 18) {echo "Eres mayor de edad";} 
elseif ($edad >= 13) {echo "Eres adolescente";}
else { echo "Eres menor de edad";}

// Operador ternario
$estado = ($edad >= 18) ? "Mayor" : "Menor";


$nota = 4;

if ($nota >= 4.5){echo "excelente";}
elseif ($nota >= 3){echo"aprueba";}
else{echo "reprueba el estudiante";}


$dia ="jueves";
if ($dia == "jueves " || $dia == "viernes"){echo"dia de la semana";}



// For
for ($i = 0; $i < 5; $i++){echo $i . " ";}

// While
$x = 1;
while ($x <= 3) { echo $x++; }

// Foreach (ideal para arrays)
$frutas = ["manzana", "pera", "uva"];
foreach ($frutas as $fruta) {echo $fruta . "\n";}


/*for ($i =1; $i <= 5; $i++){
echo $i. "<br>";
$i++;}*/



for ($i =1; $i <= 5; $i++){echo $i . "\n";}

for ($i = 1; $i <= 10; $i++){
    echo "8 x ". $i. "=".(8 *$i). "\n";
}


$i = 1;
while($i <= 10){
    echo "5 x".$i. "=".(5 * $i)."\n";
    $i++;}


// Definición de función
function saludar($nombre = "Mundo") {
return "¡Hola, " . $nombre . "!";

}

// Llamado
echo saludar("SENA");
echo saludar();

// Función con tipo de retorno (PHP 7+)
function suma(int $a, int $b): int {
return $a + $b;

// ¡Hola, SENA!
// ¡Hola, Mundo!
}




function saludar($nombre){
echo"hola" . $nombre;
}
saludar("nikol");



$nombre = "ANA";
echo strtolower($nombre);

?>