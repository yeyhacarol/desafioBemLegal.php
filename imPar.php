<?php

require_once('modulos/config.php');
require_once('modulos/calculos.php');

$inicial = (int) 0;
$final = (int) 0;
$arr = [];
$sltInicial = (string) null;
$sltFinal = (string) null;

for ($i = 0; $i <= 500; $i++) {
    $sltInicial .= '<option value="' . $i . '">' . $i . '</option>';
}

for ($i = 100; $i <= 1000; $i++) {
    $sltFinal .= '<option value="' . $i . '">' . $i . '</option>';
}

if (isset($_POST['btnCalcular'])) {
    $inicial = $_POST['sltInicial'];
    $final = $_POST['sltFinal'];

    if (!isset($_POST['sltInicial']) || !isset($_POST['sltFinal'])) {
        echo ERRO_MSG_SELECT_VAZIO;
    } elseif ($inicial >= $final) {
        echo ERRO_MSG_FINAL_MAIOR;
    } else {
        $arr = parOuImpar($inicial, $final);
    }
}

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/imPar.css">
    <title>Ímpares e pares</title>
</head>

<body>
    <header>
        <img src="./img/logo-php.png">
        <ul>
            <li><a href="media.php">Média</a></li>
            <li><a href="calculadora_simples.php">Calculadora simples</a></li>
            <li><a href="tabuada.php">Tabuada</a></li>
            <li><a href="imPar.php">Pares e ímpares</a></li>
        </ul>
    </header>

    <div class="conteudo">
        <div class="titulo">
            <p>Ímpares e pares</p>
        </div>

        <div id="form">
            <form name="frmImPar" method="POST" action="imPar.php">
                <div class="container">
                    <div class="interativo">
                        <div class="selects">
                            <div class="inicial">N° inicial:
                                <select name="sltInicial">
                                    <option value="">Selecione um número</option>
                                    <?php echo ($sltInicial) ?>
                                </select>
                            </div>
                            <div class="final">N° final:
                                <select name="sltFinal">
                                    <option value="">Selecione um número</option>
                                    <?php echo($sltFinal) ?>
                                </select>
                            </div>
                        </div>
                        <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                    </div>

                    <div class="resultados">
                        <div id="par">
                            <div class="par">Par</div>
                            <div class="numeros">
                                <span><?= count($arr) != 0 ? imprimirNumeros($arr['Pares']) : null ?></span>
                            </div>
                            <p>Qtde. de pares: <?= count($arr) != 0 ? count($arr['Pares']) : null ?></p>
                        </div>
                        <div id="impar">
                            <div class="impar">Ímpar</div>
                            <div class="numeros">
                                <span><?= count($arr) != 0 ? imprimirNumeros($arr['Impares']) : null ?></span>
                            </div>
                            <p>Qtde. de ímpares: <?= count($arr) != 0 ? count($arr['Impares']) : null ?></p>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>


</body>

</html>