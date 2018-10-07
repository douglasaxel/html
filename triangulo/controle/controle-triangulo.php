<?php
include '../modelo/triangulo.class.php';
$t = new Triangulo();
$t->setLad1($_POST['lad1']);
$t->setLad2($_POST['lad2']);
$t->setLad3($_POST['lad3']);

header("location: ../resposta.php?lad1={$t->getLad1()}&lad2={$t->getLad2()}&lad3={$t->getLad3()}&verificar={$t->verificarTriangulo()}");
