<!DOCTYPE html>
<html>
<body>


<form action="atv6.php" method="get"> <input type="text" name="nota1"><input type="text" name="nota2"> <input type="text" name="nota3"><input type="text" name="nota4"><input type="submit"></form>

    <?php
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nota4 = $_GET['nota4'];

        $somaNotas = ($nota1 + $nota2) + ($nota3 + $nota4);
        $mediaNotas = ($somaNotas / 4);

        if($mediaNotas >= 7.0){
            echo "Parabéns vc foi aprovado com sucesso, aqui está a sua média: ".$mediaNotas;
        }else{
            echo "Sinto muito, vc reprovou, terá que repetir o ano :(, sua média foi: ".$mediaNotas;
        }



    ?>
</body>
</html>
