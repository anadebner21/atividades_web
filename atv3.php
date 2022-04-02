<!DOCTYPE html>
<html>
<body>


<form action="atv3.php" method="get"> <input type="text" name="valor_digitado"> <input type="submit"></form>

<?php
$valorEscolhido = $_GET['valor_digitado'];

if($valorEscolhido > 0){
    echo "Valor Positivo"; 
}elseif ($valorEscolhido < 0){
    echo"Valor Negativo";
}else{
    echo "Igual a Zero"; 
}

?>
</body>
</html>
