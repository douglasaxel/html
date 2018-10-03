<?php
include '../modelo/month.class.php';

$b = new Month();
$b->setMonth($_POST['nummonth']);

echo '<p>Month in number: '.$b->getMonth().
     '<br>Equivalent: '.$b->checkMonth().'<p>';
