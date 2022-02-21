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
            $num = 'num';
            for($i = 1; $i <=2; $i++){
                ?>
                <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="<?php $num.$i?>">
                </div>
            </div>
            <?php
            }
            ?>

            <!--<div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num2">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num3">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num4">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num5">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num6">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num7">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num8">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num9">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num10">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num11">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num12">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num13">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num14">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num15">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num16">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num17">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num18">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 1:</label>
                    <input class="col" type="number" name="num19">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="">Número 2:</label>
                    <input class="col" type="number" name="num20">
                </div>
            </div>-->
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
                    
                    /*$num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $num3 = $_POST["num3"];
                    $num4 = $_POST["num4"];
                    $num5 = $_POST["num5"];
                    $num6 = $_POST["num6"];
                    $num7 = $_POST["num7"];
                    $num8 = $_POST["num8"];
                    $num9 = $_POST["num9"];
                    $num10 = $_POST["num10"];
                    $num11 = $_POST["num11"];
                    $num12 = $_POST["num12"];
                    $num13 = $_POST["num13"];
                    $num14 = $_POST["num14"];
                    $num15 = $_POST["num15"];
                    $num16 = $_POST["num16"];
                    $num17 = $_POST["num17"];
                    $num18 = $_POST["num18"];
                    $num19 = $_POST["num19"];
                    $num20 = $_POST["num20"];*/
                    $nump = array();
                    $numn = array();

                    /*for($i = 1; $i<=20; $i++){
                        
                        $a = $num.$i;

                        if ( $a >= 0) {
                            array_push($nump, $a);
                        }else{
                            array_push($numn, $a);
                        }
                    }*/
            

                ?>
                    <div class="row">
                        <div class="col-8">
                            <h5>Números positivos:</h5>
                            <hr>
                            <h5><?php
                                foreach ($a as $key => $value) {
                                    print $value . "\n";
                                } ?></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h5>Números negativos:</h5>
                            <hr>
                            <h5><?php
                                foreach ($numn as $key => $value) {
                                    print $value . "\n";
                                } ?></h5>
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