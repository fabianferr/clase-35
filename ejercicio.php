<?php
$galletas = 50;
while ($galletas >= 40){
echo $galletas;
if($galletas>40){
echo ", ";
}
$galletas--;
}

$contador = 1;
while ($contador <= 5){
echo 2*$contador;
if($contador<5){
echo ", ";
}
$contador++;
}

for ($i = 1; $i <= 10; $i++){
echo 6*$i;
if($i<10){
echo ", ";
}
}
?>