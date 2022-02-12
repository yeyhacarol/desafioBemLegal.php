<!-- Objetivo: tela para realizarmos calculos das 4 operações matemáticas; autora: Carolina Silva; data de criação: 07/02/2022 -->

<?php

require_once('modulos/config.php');
require_once('modulos/calculos.php');

$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;
$opcoes = (string) null;

if (isset($_POST['btnCalcular'])) {
    $valor1 = $_POST['txtValor1'];
    $valor2 = $_POST['txtValor2'];

    if ($_POST['txtValor1'] == "" || $_POST['txtValor2'] == "") {
        echo (ERRO_MSG_CAIXA_VAZIA);
    } elseif ((!is_numeric($valor1) || !is_numeric($valor2))) {
        echo (ERRO_MSG_CARACTER_INVALIDO);
    } elseif (!isset($_POST['rdocalc'])) {
        echo (ERRO_MSG_OPERACAO_CALCULO);
    } else {
        $opcoes = strtoupper($_POST['rdocalc']);

        $resultado = operacoesMatematicas($valor1, $valor2, $opcoes);
    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simples</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/botoes.css">
    <link rel="stylesheet" type="text/css" href="css/calculadora.css">
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
    <form name="frmCalculadora" method="post" action="calculadora_simples.php">
        <div class="conteiner">
            <div class="calculadora">
                <div class="titulo">Calculadora simples</div>
                <div class="valores">
                    <div class="valor1">
                        <label>Valor 1:</label>
                        <input type="text" name="txtValor1" value="<?= $valor1; ?>">
                    </div>
                    <div class="valor2">
                        <label>Valor 2:</label>
                        <input type="text" name="txtValor2" value="<?= $valor2; ?>">
                    </div>
                </div>
                <div class="opcoes">
                    <div class="operacao">
                        <input type="radio" name="rdocalc" value="somar" <?= $opcoes == 'SOMAR' ? 'checked' : null; ?>>Somar
                    </div>
                    <div class="operacao">
                        <input type="radio" name="rdocalc" value="subtrair" <?= $opcoes == 'SUBTRAIR' ? 'checked' : null; ?>>Subtrair
                    </div>
                    <div class="operacao">
                        <input type="radio" name="rdocalc" value="multiplicar" <?= $opcoes == 'MULTIPLICAR' ? 'checked' : null; ?>>Multiplicar
                    </div>
                    <div class="operacao">
                        <input type="radio" name="rdocalc" value="dividir" <?= $opcoes == 'DIVIDIR' ? 'checked' : null; ?>>Dividir
                    </div>
                </div>
                <div class="botoes">
                    <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                    <div class="novoCalculo">
                        <a href="calculadora_simples.php">Novo Cálculo</a>
                    </div>
                </div>
                <footer id="resultado">
                    O resultado é: <?= $resultado ?>
                </footer>
            </div>
        </div>
    </form>
</body>

</html>