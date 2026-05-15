<?php
echo "---------VARIABLES Y OPERACIONES BÁSICAS---------\n\n";

echo "--1.Crear un script que sume dos números ingresados por el usuario.--\n";
$num1a = 5;
$num1b = 10;
$suma = $num1a + $num1b;
echo "La suma de $num1a y $num1b es: $suma\n\n";


echo "--2.Restar, multiplicar y dividir dos números.--\n";
$num2a = 20;
$num2b = 4;
$resta = $num2a - $num2b;
$multiplicacion = $num2a * $num2b;
$division = $num2a / $num2b;
echo "La resta de $num2a y $num2b es: $resta\n";
echo "La multiplicación de $num2a y $num2b es: $multiplicacion\n";
echo "La división de $num2a y $num2b es: $division\n\n";


echo "--3.Calcular el cuadrado y el cubo de un número (potencia).--\n";
$num3 = 3;
$cuadrado = $num3 ** $num3;
$cubo = $num3 ** $num3 ** $num3;
echo "El cuadrado de $num3 es: $cuadrado\n";
echo "El cubo de $num3 es: $cubo\n\n";


echo "--4.Convertir grados Celsius a Fahrenheit.--\n";
$celsius = 25;
$fahrenheit = ($celsius * 1.8) + 32;
echo "La temperatura de $celsius grados Celsius son $fahrenheit grados Fahrenheit\n\n";


echo "--5.Calcular el área de un triángulo.--\n";
$base = 10;
$altura = 5;
$area = ($base * $altura) / 2;
echo "El área de un triángulo con base $base y altura $altura es: $area\n\n";



echo "---------CONDICIONALES (if, else, elseif)---------\n\n";

echo "--6.Verificar si un número es par o impar.--\n";
$num6 = 7;

if ($num6 % 2 == 0) {
    echo "El número $num6 es par.\n\n";
} else {
    echo "El número $num6 es impar.\n\n";
}


echo "--7.Determinar si una persona es mayor de edad.--\n";
$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.\n\n";
} else {
    echo "Eres menor de edad.\n\n";
}


echo "--8.Comparar dos números y mostrar el mayor.--\n";
$num8a = 15;
$num8b = 25;

if ($num8a > $num8b) {
    echo "El número mayor es: $num8a\n\n";
} elseif ($num8b > $num8a) {
    echo "El número mayor es: $num8b\n\n";
} else {
    echo "Ambos números son iguales.\n\n";
}


echo "--9.Calcular el promedio de 3 notas y decir si aprueba (>=3.0).--\n";
$nota1 = 4.5;
$nota2 = 3.5;
$nota3 = 2.8;
$promedio = ($nota1 + $nota2 + $nota3) / 3;

if ($promedio >= 3.0) {
    echo "El promedio es $promedio. El estudiante Aprueba\n\n";
} else {
    echo "El promedio es $promedio. El estudiante Reprueba\n\n";
}


echo "--10.Validar si una contraseña es correcta (valor fijo).--\n";
$contraseña= 2838;
$contraseña_ingresada = 2838;

if ($contraseña == $contraseña_ingresada) {
    echo "La contraseña es correcta.\n\n";
} else {
    echo "La contraseña es incorrecta.\n\n";
}



echo "---------BUCLES FOR---------\n\n";

echo "--16.Imprimir números del 1 al 10.--\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}
echo "\n";


echo "--17.Mostrar la tabla de multiplicar de un número.--\n";
for ($i =1; $i <=10; $i++) {
    echo "40 x".$i." = " . (40 * $i) . "\n";
}
echo "\n";


echo "--18.Sumar los números del 1 al 100.--\n";
$suma18 = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma18 += $i;
}
echo "La suma de los números del 1 al 100 es: $suma18\n\n";


echo "--19.Mostrar solo números pares del 1 al 50.--\n";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
echo "\n";


echo "--20.Crear un contador regresivo (10 a 1).--\n";
for ($i = 10; $i >= 1; $i--) {
    echo $i . "\n";
}
echo "\n";


echo "---------BUCLES WHILE---------\n\n";

echo "--21.Pedir números hasta que el usuario ingrese 0.--\n";
$num21 = 1;

/*while ($num21 != 0) {
    echo "Ingrese otro número: ";
}
echo "\n";*/


echo "--22.Mostrar números del 1 al 20 usando while.--\n";
$num22 = 1;

while ($num22 <= 20) {
    echo $num22 . "\n";
    $num22++;
}
echo "\n";


echo "--23.Sumar números hasta que la suma supere 100.--\n";
$suma23 = 0;
while ($suma23 <= 100) {
    $suma23 += 10;
    echo "Suma actual: $suma23\n";
}
echo "la suma ha superado 100\n\n";


echo "--24.Validar contraseña hasta que sea correcta.--\n";
$contraseña24 = 1234;
$contraseña_ingresada24 = 1234;

while ($contraseña_ingresada24 != $contraseña24) {
    echo "Ingrese la contraseña: ";
}
echo "Contraseña correcta\n\n";


echo "--25.Contar cuántos números son menores a 10.--\n";
$count25 = 0;

while ($count25 < 10) {
    echo $count25 . "\n";
    $count25++;
}
echo "Hay $count25 números menores a 10.\n\n";



echo "---------ARREGLOS (LISTAS)---------\n\n";

echo "--26.Crear un arreglo de 5 nombres y mostrarlos.--\n";
$nombres = ["Ana", "Luis", "Carlos", "María", "Sofía"];
echo $nombres;


echo "--27.Recorrer un arreglo con foreach.--\n";
$lista27 = ["Rojo", "Verde", "Azul", "Amarillo"];

foreach ($lista27 as $color) {
    echo $color . "\n";
}
echo "\n";


echo "--28.Buscar un elemento dentro de un arreglo.--\n";
$elemento28 = "Azul";
$encontrado28 = false;

foreach ($lista27 as $color) {
    if ($color == $elemento28) {
        $encontrado28 = true;
        break;
    }
}

if ($encontrado28) {
    echo "El elemento '$elemento28' fue encontrado en el arreglo.\n\n";
} else {
    echo "El elemento '$elemento28' no fue encontrado en el arreglo.\n\n";
}


echo "--29.Calcular el promedio de un arreglo de números.--\n";
$numeros29 = [5, 10, 15, 20];
$suma29 = $numeros29[0] + $numeros29[1] + $numeros29[2] + $numeros29[3];
$promedio29 = $suma29 / strlen($numeros29);
echo "El promedio de los números es: $promedio29\n\n";


echo "--30.Ordenar un arreglo de menor a mayor.--\n";
$numeros30 = [5, 2, 9, 1, 5];
sort($numeros30);
foreach ($numeros30 as $num) {
    echo $num . "\n";
}
