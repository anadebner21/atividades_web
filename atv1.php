<!DOCTYPE html>
<html>
<body>


<form action="atv1.php" method="get"> <input type="text" name="valor_digitado"> <input type="submit"></form>

<?php
$valorEscolhido = $_GET['valor_digitado'];

if($valorEscolhido > 10){
    echo "O valor é maoir que 10"; 
}else{
    echo"O valor é menor que 10";
}

?>
</body>
</html>




















