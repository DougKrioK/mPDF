<?php

// Require composer autoload
require_once 'mpdf/mpdf.php';
//require_once('relatorio_agendamento_evento.php');

$mpdf = new mPDF('utf-8','A4','','',9,9,5,5);

// mPDF('utf-8','TAMANHO DA FOLHA','','',ESQUERDA,DIREITA,CIMA,BAIXO);

ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <!-- 
		Suporta css básico. 
		A grid do bt3, somente no tamanho xs até 8
		não suporta container.
		ainda estou descobrindo mais detalhes,
     -->

    <meta charset="UTF-8">
    <title>Testando - mPDF</title>

    <style>
    	.preto{
    		background: black;
    		color: white;    	}
    	.blue{
    		background: blue;
    		color: white;

    	}
    </style>

</head>

<body>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

	<div class="col-xs-1 preto">1</div>
	<div class="col-xs-1 blue">2</div>
	<div class="col-xs-1 preto">3</div>
	<div class="col-xs-1 blue">4</div>
	<div class="col-xs-1 preto">5</div>
	<div class="col-xs-1 blue">6</div>
	<div class="col-xs-1 preto">7</div>
	<div class="col-xs-1 blue">8</div>

</body>
</html>

<?php

$html = ob_get_contents();
//Pega o que foi renderizado e joga na variavel

ob_end_clean();

// send the captured HTML from the output buffer to the mPDF class for processing

$mpdf->WriteHTML($html);

$mpdf->Output();
// no Output, tem várias opções, como se vai abrir, ou oferecer pra download.

exit;
