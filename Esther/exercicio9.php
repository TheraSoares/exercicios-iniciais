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
            <h2>Exercício 9</h2>
        </header>
        <hr>
        <form method="post">
            <div class="row">
                <div class="form-group col-4">
                    <label for="num">Digite o número de vezes que deseja imprimir a palavra SOL:</label>
                    <input class="form-control text-center" type="text" id="num" name="num">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <button type="input" name="imprimir" class="btn btn-primary">Imprimir</button>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST["imprimir"])) {
                    $num = $_POST["num"];
                    if ($num!=0 and $num!=null and $num>0) {?>
                    <div class="col alert alert-success">
                        <h5>SOL <?php
                                echo $num;
                                ?> VEZES:</h5>
                        <hr>
                        <h5><?php
                            for ($i = $num; $i >= 1; $i--) {
                                print "SOL\n";
                            }
                        ?></h5>
                    </div>
                    <?php }else {?>
                        <div class="col-4 alert alert-warning">
                            <h5>Didite um numero válido!</h5>
                        </div>
                    <?php }?>
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