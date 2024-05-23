
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
//arrays
$frutas = array (
    "vermelhas" => array( 
        "melancia", 
        "cereja", 
        "framboesa",
        "morango"
     ),    
     
     
    "citricas" => array(
        "laranja", 
        "limao",
        "abacaxi",
        "mexerica"
     ),
     
     "tropicais" => array (
         "goiaba",
         "maracuja",
         "banana",
         "manga"
         ),
);
print_r($frutas);
?>

<?php
//funções
$num1 = 10;
$num2 = 15;

$num3 = soma($num1,$num2);
imprimir_resultado($num3);


function soma($numero1, $numero2)
{
   return $numero1 + $numero2;
}
function imprimir_resultado($numero)
{
   echo "O resultado da operação é igual a: " . $numero;
}

?>
</body>
</html>