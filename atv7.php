<!DOCTYPE html>
<html>
<body>


<form action="atv7.php" method="get"> <input type="text" name="altura"><input type="text" name="sexo"> <input type="submit"></form>

<?php
$altura = $_GET['altura'];
$sexo = $_GET['sexo'];

if($sexo == "m"){
    $calculo1 = (62.1 * $altura);
    $pesoIdealMulheres = ($calculo1 - 44.7);
    echo "Seu peso ideal é: ".$pesoIdealMulheres;
   }
elseif($sexo == "h" ){
    $calculo2 = (72.7 * $altura);
    $pesoIdealHomens = ($calculo2 - 58);
    echo "Seu peso ideal é : ".$pesoIdealHomens;
}

?>
</body>
</html>
