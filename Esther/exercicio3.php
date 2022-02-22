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
            <h2>Exercício 3</h2>
        </header>
        <hr>
        <form method="post">
            <div class="row">
                <div class="form-group col-4">
                    <label for="nome">Nome:</label>
                    <input class="form-control text-center" type="text" id="nome" name="nome">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="sexo">Sexo:</label>
                    <select class="form-control text-center" id="sexo" name="sexo">
                        <option value="femi">Feminino</option>
                        <option value="masc">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="">Idade:</label>
                    <input class="form-control text-center"type="number" id="idade" name="idade">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-4">
                    <button type="input" name="enviar" class="btn btn-primary">Enviar</button>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST["enviar"])) {
                    $idade = $_POST["idade"];
                    if ($idade != 0 and $idade != null and is_numeric($idade)) {
                        if ($idade <= 18) {
                ?>
                            <div class="col alert alert-success">
                                <h5><?php echo $idade; ?> ANOS MENOR DE IDADE. ACEITA.</h5>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col alert alert-danger">
                                <h5><?php echo $idade; ?> ANOS MAIOR DE IDADE. NÃO ACEITA.</h5>
                            </div>
                        <?php

                        }
                    } else {
                        ?>
                        <div class="col alert alert-warning">
                            <h5>DIGITE UM NÚMERO VÁLIDO PARA A IDADE.</h5>
                        </div>
                <?php
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