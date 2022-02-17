<!-- Objetivo: tela para realizar a tabuada; autora: Carolina Silva; data de criação: 09/02/2002
Modificado: 17/02/2022(documentação) -->

<?php

//importação dos arquivos responsáveis por realizar o cálculo e de validação
require_once('modulos/config.php');
require_once('modulos/calculos.php');

//declaração das variáveis 
$multiplicando = (int) 0;
$multiplicador = (int) 0;
$resultado = (int) 0;

//verificando se o botão foi clicado
if (isset($_POST['btnCalcular'])) {
    //armazenando valores das caixas de texto nas variáveis
    $multiplicador = $_POST['txtMultiplicador'];
    $multiplicando = $_POST['txtMultiplicando'];

    //verificações cujas mensagens de erro estão no arquivo config.php
    if ($_POST['txtMultiplicador'] == "" || $_POST['txtMultiplicando'] == "") {
        echo (ERRO_MSG_CAIXA_VAZIA);
    } elseif (!is_numeric($multiplicador) || !is_numeric($multiplicando)) {
        echo (ERRO_MSG_CARACTER_INVALIDO);
    } elseif ($_POST['txtMultiplicador'] == 0) {
        echo (ERRO_MSG_MULTIPLICACAO_ZERO);
    } else {
        $resultado = tabuada($multiplicando, $multiplicador);
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
    <link rel="stylesheet" type="text/css" href="./css/botoes.css">
    <link rel="stylesheet" type="text/css" href="./css/tabuada.css">
    <title>Tabuada</title>
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
    <form name="frmTabuada" method="post" action="tabuada.php">
        <div class="conteiner">
            <div class="tabuada">
                <div class="titulo">Tabuada</div>
                <div class="valores">
                    <div class="valor1">
                        <label>Multiplicando:</label>
                        <input type="text" name="txtMultiplicando" value="<?= $multiplicando; ?>">
                    </div>
                    <div class="valor2">
                        <label>Multiplicador:</label>
                        <input type="text" name="txtMultiplicador" value="<?= $multiplicador; ?>">
                    </div>
                </div>
                <div class="botoes">
                    <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                </div>
                <footer id="resultado">
                    <div class="resultado"><?= $resultado ?></div>
                </footer>
            </div>
        </div>
    </form>

</body>

</html>