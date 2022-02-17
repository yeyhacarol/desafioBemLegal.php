<!-- Objetivo: arquivo para armazanar todas as funções de cálculos telas; autora; Carolina Silva -->

<?php

//função utilizada em media.php para a realização do cálculo de média utilizando 4 notas
function calcularMedia($nota1, $nota2, $nota3, $nota4, $media) {
  
    $n1 = (float) $nota1;
    $n2 = (float) $nota2;
    $n3 = (float) $nota3;
    $n4 = (float) $nota4;
    $calculo = (string) $media;
    $resultado = (float) 0;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $resultado = $media;

    //round para que o resultado seja arredondado
    $resultado = round($resultado, 2);

    return $resultado;
}

//função utilizada em calculadora_simples.php para realização das 4 operações matemáticas
function operacoesMatematicas($numero1, $numero2, $operacao) {
    $num1 = (float) $numero1;
    $num2 = (float) $numero2;
    $tipoCalculo = (string) $operacao;
    $result = (float) 0;

    switch ($tipoCalculo) {
        case "SOMAR":
            $result = $num1 + $num2;
            break;
        case "SUBTRAIR":
            $result = $num1 - $num2;
            break;
        case "MULTIPLICAR":
            $result = $num1 * $num2;
            break;
        case "DIVIDIR":
            if ($num2 == 0)
                echo (ERRO_MSG_DIVISAO_ZERO);
            else
                $result = $num1 / $num2;
            break;
        default:
    }

    $result = round($result, 2);

    return $result;
}

//função utilizada em tabuada.php para realizar o cálculo de multiplicação e exibir todos seus resultados partindo do multiplicando e máx. multiplicador
function tabuada($multiplicador, $multiplicando) {
    $resultado = null;
    $resultadoRefatorado = null; /* variável para que o resultado apareça de maneira mais visual para o usuário */

    //laço de repetição para que a tabuada se repita até o máx. multiplicador, no qual $i o representaria 
    for ($i = 0; $i <= $multiplicando; $i++) {
        $resultado = $multiplicador * $i; 
        $resultadoRefatorado .= ($multiplicador . " x " . $i . " = " . $resultado . '<br>'); /* montagem da estrutura visual para o usuário, que se repete n vezes */
    }

    return $resultadoRefatorado;
}

/*** funções utilizadas no arquivo imPar.php ***/
//funçãoque determina os números ímpares e pares entre o primeiro e último selecionados
function parOuImpar($inicial, $final)  {
    //variável para receber n números dependendo do inicial e do final e classificando-os(chaves) em 'Pares' e 'Impares'
    $array = [
        'Pares' => [],
        'Impares' => []
    ];

    //criando um range entre o número inicial e final selecionados e armazenando cada um deles em $numero
    foreach(range($inicial, $final) as $numero) {
        /*se o resto% do $numero dividido por 2 for igual a 0, este array é constituído por números 'Pares', 
            adicionando os numeros sempre ao final do array deixando os sequenciais, o mesmo para os 'Impares'*/
        if ($numero % 2 == 0) {
            array_push($array['Pares'], $numero);
        } else {
            array_push($array['Impares'], $numero);
        }        
    }

    return $array;
}

//função para imprimir a sequência de números que serão classificados pela função supracitada
function imprimirNumeros($array) {
    $acumuladora = (string) null; /* variável para gerar o "$array" de <span/> */

    foreach($array as $numero){
        $acumuladora.= '<span>'. $numero .'</span><br>';
    }

    return $acumuladora;
}
