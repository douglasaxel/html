<?php
include '../modelo/converter.class.php';

$b = new Converter();
$b->setReal($_POST['numreal']);

echo '<p>Real: '.$b->getReal().
     '<br>Dolar: '.$b->calculateDolar().
     '<br>Euro: '.$b->calculateEuro().'<p>';
