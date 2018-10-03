<?php
include '../modelo/number.class.php';

$b = new Number();
$b->setNum1($_POST['num1']);
$b->setNum2($_POST['num2']);
$b->setNum3($_POST['num3']);

echo '<p>Number 1: '.$b->getNum1().
     '<br>Number 2: '.$b->getNum2().
     '<br>Number 3: '.$b->getNum3().
     '<br>Crescent Order: '.$b->crescentOrder().
     '<br>'.
     '<br>Decrescent Order: '.$b->decrescentOrder().'<p>';
