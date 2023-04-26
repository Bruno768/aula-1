<?php

$time = array('Maria,','José','Ana');

echo $time[2];

echo '<br />';

print_r($time);

echo 'a: ['. TRUE . ']<br />';
echo 'a: ['. FALSE . ']<br />';
echo 'a: ['. (20>9) . ']<br />';
echo 'a: ['. (5==6) . ']<br />';
echo 'a: ['. (1==0) . ']<br />';
echo 'a: ['. (1==='1') . ']<br />';
$idade = 30;
echo 'e: ['. "$idade" . ']<br />';
///
$saldo = 10;
if ($saldo<100){
    $deposito = 1000;
    $saldo += $deposito;
}

echo $saldo;
/*
//phpinfo();
$contador = 1;
$mensagem = 'Olá';
$versao = array('1.1','2','3.4');
//print_r($versao);

$primeiro_nome = 'Maria';
echo $primeiro_nome;
echo '<br />';
$ultimo_nome = 'Lourdes';
echo $ultimo_nome;
*/
?>
