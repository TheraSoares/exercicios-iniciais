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
    <div class="container">
        <header>
            <h2>Exercício 8</h2>
        </header>
        <hr>
        <form method="post">
            <div class="row">
                <div class="form-group col-4">
                    <label for="num1">Digite um número:</label>
                    <input class="form-control text-center" type="text" id="num1" name="num1">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <button type="input" name="calcular" class="btn btn-primary">Calcular</button>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST["calcular"])) {
                    $num1 = $_POST["num1"];
                    $numeros = array();
                    $produt = 1;
                    for ($i = $num1; $i > 0; $i--) {
                        $produt *= $i;
                        $numeros[$i] = $i;
                    }
                    $produt = number_format($produt, 0, ',', '.'); ?>

                    <div class="col alert alert-success">
                        <h5>Número: <?php
                                    echo $num1;
                                    ?></h5>
                        <hr>
                        <h5>Lista: <?php
                                    foreach ($numeros as $num) {
                                        print $num . " \n";
                                    }
                                    ?></h5>
                        <h5>Produto: <?php
                                        echo $produt;
                                        ?></h5>
                    </div>

                <?php } ?>

            </div>
        </form>
    </div>

    <!-- JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>