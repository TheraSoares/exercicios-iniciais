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
        <h2>Exercício 10</h2>
    </header>
    <hr>

    <div class="container">
        <form method="post">
            <?php 
            for($i = 1; $i <=20; $i++){
                ?>
                <div class="row">
                <div class="col-4">
                    <label for="">Número <?php echo $i;?>:</label>
                    <input class="col" type="number" name="num<?php echo $i;?>">
                </div>
            </div>
            <?php
            }
            ?>
            <br>
            <div class="row">
                <div class="col-4">
                    <button type="input" name="calcular" class="btn btn-primary">Calcular</button>
                </div>
            </div>
            <br><br>
            <div class="row">
                <?php
                if (isset($_POST["calcular"])) {
                    $a = $_POST;
                    
                    $nump = array();
                    $numn = array();

                    foreach ($a as $key => $value) {
                        
                        if ( $value >= 0) {
                            array_push($nump, $value);
                        }else{
                            array_push($numn, $value);
                        }
                    }
            

                ?>
                    <div class="row">
                        <div class="col-10">
                            <h5>Números positivos:</h5>
                            <hr>
                            <h5><?php
                                foreach ($nump as $key => $value) {
                                    print $value . "\n";
                                } ?></h5>
                                <h6>soma = <?php print array_sum($nump);?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <h5>Números negativos:</h5>
                            <hr>
                            <h5><?php
                                foreach ($numn as $key => $value) {
                                    print $value . "\n";
                                } 
                                ?></h5>
                                <h6>soma = <?php print array_sum($numn);?></h6>
                                
                        </div>
                    </div>

                <?php
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