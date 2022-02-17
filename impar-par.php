<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>Ímpares e pares</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .conteudo {
            height: calc(100vh - 100px);

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .titulo {
            width: 50%;
            height: 80px;

            background-color: #CCCCDD;
        }

        .titulo>p {
            font-size: 1.7rem;

            text-align: center;
            line-height: 80px;
        }

        #form {
            width: 50%;
            height: 400px;
            background-color: #EFEFEF;

            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        form {
            width: 100%;
        }

        .inicial,
        .final {
            display: flex;
            flex-direction: row; 
            margin-left: 30px;
            gap: 15px; 

            font-size: clamp(1.2rem, 2vw, 2rem);
        }

        .final {
            margin-top: 30px;
            margin-left: 48px;
        }

        select {
            width: 20%;
            height: 25px;
            background-color: #C4C4C4;
        }

        .interativo {
            display: inline-block;
        }

        .calcular {
            width: 20%;
            height: 50px;
            background-color: #C4C4C4;
            font-size: clamp(1rem, 1.3vw, 1.2rem);
            border: none;
            cursor: pointer;
            margin-left: 80px;
        }



    </style>
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
            <form name="frmImPar" method="POST" action="impar-par.php">
                <div class="container">
                    <div class="interativo">
                        <div class="selects">
                            <div class="inicial">N° inicial: <select name="sltInicial"></select></div>
                            <div class="final">N° final: <select name="sltFinal"></select></div>
                        </div>
                        <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                    </div>

                    <div class="resultados">
                        <div id="par">
                            <div class="par">Par</div>
                            <div class="numerosPares">

                            </div>
                            <p>Qtde. de pares: </p>
                        </div>
                        <div id="impar">
                            <div class="ímpar">Ímpar</div>
                            <div class="numerosImpares">

                            </div>
                            <p>Qtde. de ímpares: </p>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>


</body>

</html>