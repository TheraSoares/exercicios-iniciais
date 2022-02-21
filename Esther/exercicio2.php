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
        <h2>Exercicio 2</h2>
    </header>
    <hr>


    <div class="container">
        <form method="POST">

            <div class="row">
                <div class="col">
                    <h3>Verificador de divisores</h3>
                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-sm-8">
                    <label>Digite um número:</label>
                    <input class="col" type="text" name="num1">
                    <br><br>
                    <button type="submit" name="verif" class="btn btn-primary">Verificar</button>
                    <br><br><br><br>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST["verif"])) {
                    $num1 = $_POST["num1"];
                    if ($num1 <> 0 || $num1 <> null and is_numeric($num1)) {
                        $dez = $num1 % 10;
                        $cinco = $num1 % 5;
                        $dois = $num1 % 2;
                ?><div class="col alert alert-secondary">
                            <h5><?php echo $num1; ?>:</h5>
                            <br><?php
                                if ($dez == 0) {
                                ?>
                                <div class="col alert alert-success">
                                    <h5>é divisivel por 10.</h5>
                                </div><?php
                                    }
                                    if ($cinco == 0) {
                                        ?>
                                <div class="col alert alert-success">
                                    <h5>é divisivel por 5.</h5>
                                </div><?php
                                    }
                                    if ($dois == 0) {
                                        ?>
                                <div class="col alert alert-success">
                                    <h5>é divisivel por 2.</h5>
                                </div><?php
                                    }
                                    if ($dez <> 0 and $cinco <> 0 and $dois <> 0) { ?>
                                <div class="col alert alert-danger">
                                    <h5>não é divisivel por 10, nem por 5 e nem por 2.</h5>
                                </div>
                            <?php
                                    }
                            ?>
                        </div><?php
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