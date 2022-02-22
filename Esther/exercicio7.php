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
            <h2>Exercício 7</h2>
        </header>
        <hr>
        <form method="post">
            <div class="row">
                <h3>Biblioteca Locservice</h3>
            </div>
            <div class="row">
                <h4>Emprestimo</h4>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="livro">Livro:</label>
                    <input class="form-control text-center" type="text" id="livro" name="livro">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="user">Usuário:</label>
                    <select class="form-control text-center" id="user" name="user">
                        <option value="Professor">Professor</option>
                        <option value="Aluno">Aluno</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <button type="input" name="descobrir" class="btn btn-primary">Emprestar</button>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST["descobrir"])) {
                    $livro = $_POST["livro"];
                    $usuario = $_POST["user"];
                    if ($usuario == 'Professor') {
                        $dt_entrega = date('d/m/Y', strtotime('+10 days')); //prof
                    } elseif ($usuario == 'Aluno') {
                        $dt_entrega = date('d/m/Y', strtotime('+3 days')); //aluno
                    } ?>
                    <div class="col-4 alert alert-warning">
                        <h5>Biblioteca Locservice</h5>
                        <hr>
                        <h5>Livro: <?php
                                    echo $livro;
                                    ?></h5>
                        <h5>Usuário: <?php
                                    echo $usuario;
                                    ?></h5>
                        <h5>Devolução: <?php
                                        echo $dt_entrega;
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