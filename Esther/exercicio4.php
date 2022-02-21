<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Bootstrap</title>
    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>

    <header>
        <h2>Exercício 4</h2>
    </header>
    <hr>

    <div class="container">
        <form method="post">
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num1">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num2">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 3:</label>
                    <input class="col" type="number" name="num3">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <button type="input" name="ordenar" class="btn btn-primary">Ordenar</button>
                </div>
            </div>

            <br><br>
            <div class="row">
                <?php
                if (isset($_POST["ordenar"])) {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $num3 = $_POST["num3"];
                    if (($num1 != null) and ($num2 != null) and ($num3 != null)) {
                        $num = array($num1, $num2, $num3);
                        if ($num3 == $num2) {
                            $num = array($num1, $num2);
                            if ($num1 == $num2) {
                                $num = array($num1);
                            }
                        }elseif($num3 == $num1) {
                            $num = array($num1, $num2);
                            if ($num1 == $num2) {
                                $num = array($num1);
                            }
                        }elseif ($num1 == $num2) {
                            $num = array($num1, $num3);
                        }
                        arsort($num);
                            echo "Números ordenados de forma decrescente:\n";
                        foreach ($num as $chave => $valor) {
                            echo "$valor;\n";
                        }
                    }
                } ?>

            </div>
        </form>
    </div>

    <!-- JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>