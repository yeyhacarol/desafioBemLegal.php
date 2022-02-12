<?php

function calcularMedia($nota1, $nota2, $nota3, $nota4, $media) {
  
    $n1 = (float) $nota1;
    $n2 = (float) $nota2;
    $n3 = (float) $nota3;
    $n4 = (float) $nota4;
    $calculo = (string) $media;
    $resultado = (float) 0;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $resultado = $media;

    $resultado = round($resultado, 2);

    return $resultado;
}

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

function tabuada($multiplicador, $multiplicando) {

    $valor1 = (int) $multiplicador;
    $valor2 = (int) $multiplicando;
    $resultado = null;
    $resultadoRefatorado = null;

    for ($i = 0; $i <= $multiplicando; $i++) {
        $resultado = $multiplicador * $i; 
        $resultadoRefatorado .= ($multiplicador . " x " . $i . " = " . $resultado . '<br>'); 
    }

    return $resultadoRefatorado;
}

function parOuImpar($inicial, $final)  {
    $array = [
        'Pares' => [],
        'Impares' => []
    ];

    foreach(range($inicial, $final) as $numero) {
        if ($numero % 2 == 0) {
            array_push($array['Pares'], $numero);
        } else {
            array_push($array['Impares'], $numero);
        }        
    }

    return $array;
}

function imprimirNumeros($array) {
    $acumuladora = (string) null;

    foreach($array as $number){
        $acumuladora.= '<span>'. $number .'</span><br>';
    }

    return $acumuladora;
}
