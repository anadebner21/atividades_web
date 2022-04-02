<!DOCTYPE html>
<html>
<body>


<form action="atv5.php" method="get"> <input type="text" name="valor_digitadoA"><input type="text" name="valor_digitadoB"> <input type="submit"></form>

<?php
$menor = $_GET['valor_digitadoA'];
$maior = $_GET['valor_digitadoB'];

if($maior < $menor){
    $temp=$menor;
    $menor=$maior;
    $maior=$temp;
   }
   echo "$menor, $maior";

?>
</body>
</html>
