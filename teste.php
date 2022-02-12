<?php 
$inicial = (int) 0;
$final = (int) 100;
$arr = range($inicial, $final);

$res;

foreach($arr as $number){
    $number % 2 == 0;
    $res.= $number . "<br> ";
}

echo($res);

function gera($arr) {
    $res2 = null;
    foreach($arr as $number) {
        $res2.= '<span value="'. $number .'" >'. $number . '</span>';
    }
    return $res2;
}


$res2 = gera($arr);
echo($res2);

?>