<?php
require '../modelo/conversor.class.php';

$v = new Conversor();
$v->setAno($_POST['numano']);

echo '<p>Idade: '.$v->getAno().
     '<br>Idade em meses: '.$v->calcularIdadeMeses().
     '<br>Idade em semanas: '.$v->calcularIdadeSemanas().
     '<br>Idade em dias: '.$v->calcularIdadeDias().
     '<br>Idade em horas: '.$v->calcularIdadeHoras().
     '<br>Idade em minutos: '.$v->calcularIdadeMinutos().
     '<br>Idade em segundos: '.$v->calcularIdadeSegundos().
     '<br>Idade em milesimos: '.$v->calcularIdadeMilesimo().'</p>';
