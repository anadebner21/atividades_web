<!DOCTYPE html>
<html>
<body>


<form action="atv2.php" method="get"> <input type="text" name="valor_digitado"> <input type="submit"></form>

<?php
$valorEscolhido = $_GET['valor_digitado'];

if($valorEscolhido >= 10){
    echo "O valor é maior ou igual a 10"; 
}else{
    echo"O valor não é maior ou igual a 10";
}

?>
</body>
</html>
