<!-- Objetivo: tela para diferenciar números ímpares e pares; autora: Carolina Silva; data de criação: 07/02/2022;
Modificações feitas constantemente desde então com testes! última modificação: 17/02/2022 -->

<?php

//importação dos arquivos que armazenam as mensagens de erro e realizam os cálculos
require_once('modulos/config.php');
require_once('modulos/calculos.php');

//declaação de variáveis
$inicial = (int) 0;
$final = (int) 0;
$arr = []; /* variável para armazenar os valores do array criado no arquivo de calculos.php para difenciar os números */
$sltInicial = (string) null;
$sltFinal = (string) null;

//geradores de option das selects com os números que vão de 0 a 500 e 100 a 1000 para as selects inicial e final respectivamente
for ($i = 0; $i <= 500; $i++) {
    $sltInicial .= '<option value="' . $i . '">' . $i . '</option>';
}

for ($i = 100; $i <= 1000; $i++) {
    $sltFinal .= '<option value="' . $i . '">' . $i . '</option>';
}

//verificando se o botão foi acionado
if (isset($_POST['btnCalcular'])) {
    //armazenando valores das selects nas variáveis
    $inicial = $_POST['sltInicial'];
    $final = $_POST['sltFinal'];

    //verificação de erro cujas mensagens se encontram no arquivo config.php
    if (!isset($_POST['sltInicial']) || !isset($_POST['sltFinal'])) {
        echo ERRO_MSG_SELECT_VAZIO;
    } elseif ($inicial >= $final) {
        echo ERRO_MSG_FINAL_MAIOR;
    } else {
        $arr = parOuImpar($inicial, $final); /* array recebendo função que diferencia números pares de ímpares */
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
                                    <?php echo ($sltInicial) ?> <!-- imprimindo o resultado do for que percorre 500 números -->
                                </select>
                            </div>
                            <div class="final">N° final:
                                <select name="sltFinal">
                                    <option value="">Selecione um número</option>
                                    <?php echo($sltFinal) ?> <!-- imprimindo o resultado do for que percorre 900 números -->
                                </select>
                            </div>
                        </div>
                        <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                    </div>

                    <div class="resultados">
                        <div id="par">
                            <div class="par">Par</div>
                            <div class="numeros">
                                <span><?= count($arr) != 0 ? imprimirNumeros($arr['Pares']) : null ?></span> <!-- função count para contar a quantidade de itens do array 
                                                                                                                    se tal quantidade for diferente de zero, deverá executar a função
                                                                                                                    imprimirNumeros, que deverá exibir números do tipo 'Pares' -->
                            </div>
                            <p>Qtde. de pares: <?= count($arr) != 0 ? count($arr['Pares']) : null ?></p> <!-- nesse caso contamos a quantidade de números armazenados em $arr para assim
                                                                                                                poder contar a quantidade de números que são 'Pares' e exibir seu total na tela.
                                                                                                                
                                                                                                                O mesmo será feito para números ímpares. -->
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