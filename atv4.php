<!DOCTYPE html>
<html>
<body>


<form action="atv4.php" method="get"> <input type="text" name="valor_digitadoA"><input type="text" name="valor_digitadoB"><input type="text" name="valor_digitadoC"><input type="text" name="valor_digitadoD"> <input type="submit"></form>

<?php
$valorEscolhidoA = $_GET['valor_digitadoA'];
$valorEscolhidoB = $_GET['valor_digitadoB'];
$valorEscolhidoC = $_GET['valor_digitadoC'];
$valorEscolhidoD = $_GET['valor_digitadoD'];

$resultadoAC = ($valorEscolhidoA + $valorEscolhidoC);
$resultadoBD = ($valorEscolhidoB * $valorEscolhidoD);

if($resultadoAC > $resultadoBD){
    echo "A+C é maior que BxD"; 
}elseif($resultadoAC < $resultadoBD){
    echo "A+C é menor que BxD"; 

}
else{
    echo"A+C é igual a BxD";
}

?>
</body>
</html>
