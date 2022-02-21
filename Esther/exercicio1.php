<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Bootstrap</title>
    <?php include'logo.php';?>
    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <header>
            <h2>Exercicio 1</h2>
        </header>
        <hr>
    </div>

    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col">
                    <h3>Soma mágica</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <h5>Para continuar digite dois numeros inteiros</h5>
            </div>
            <br><br>

            <div class="row">
                <div class="col-sm">
                    <label>Primeiro número:</label>
                    <input class="col" type="text" name="num1">
                </div>

                <div class="col-sm">
                    <label for="">Segundo número:</label>
                    <input class="col" type="text" name="num2">
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" name="somar">Somar</button>
            </div>

        </form>
        <div class="row">
            <?php
            if (isset($_POST["somar"])) {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                if (($num1 <> 0 || $num1 <> null and is_numeric($num1)) and ($num2 <> 0 || $num2 <> null and is_numeric($num2))) {
                    $soma = $num1 + $num2;
                    if ($soma > 20) {
                        $soma_m = $soma + 8;
                    } else {
                        $soma_m = $soma - 5;
                    }
            ?>
                    <div class="col-sm alert alert-warning">
                        <h5>Resultado Soma Mágica: <?php echo $soma_m; ?>
                        </h5>
                    </div>
            <?php
                }
            } ?>

        </div>

    </div>

    <!-- JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>