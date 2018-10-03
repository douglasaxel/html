<?php
include '../modelo/circulo.class.php';

$b = new Circulo();
$b->setRaio($_POST['numraio']);

echo '<p>Raio: '.$b->getRaio().
     '<br>Área: '.$b->calcularArea().
     '<br>Perímetro: '.$b->calcularPerimetro().'<p>';
