<?php
include '../modelo/distancia.class.php';

$b = new Distancia();
$b->setX1($_POST['numx1']);
$b->setY1($_POST['numy1']);
$b->setX2($_POST['numx2']);
$b->setY2($_POST['numy2']);

echo '<p>Valor de X: '.$b->getX1().
     '<br>Valor de Y: '.$b->getY1().
     '<br>Valor de X2: '.$b->getX2().
     '<br>Valor de Y2: '.$b->getY2().
     '<br>Distância entre os pontos: '.$b->calcularDistancia().'<p>';
