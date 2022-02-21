<?php
$meses = array(
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
);
$result=null

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>

    <header>
        <h2>Exercício 6</h2>
    </header>
    <hr>

    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col-4">
                    <h3>Qual é o mês?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Digite o numero do mês que deseja saber:</label>
                    <input class="col" type="number" name="num1">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <button type="input" name="descobrir" class="btn btn-primary">Descobrir</button>
                </div>
            </div>
            <br><br>
            <div class="row">
                <?php
                if (isset($_POST["descobrir"])) {
                    $num1 = $_POST["num1"];
                    if ($num1 != null and $num1 <= 12) {
                        $result = $meses[$num1];
                    }else {
                        $result = 'Não existe um mês com este número, digite um número válido.';
                    }
                }
                ?>

                <div class="col">
                    <h5><?PHP if ($result != null) {
                        echo $result;
                    } ?></h5>
                </div>


            </div>
        </form>
    </div>

    <!-- JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>