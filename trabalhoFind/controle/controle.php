<?php
session_start();
include '../modelo/pessoa.class.php';
include '../util/padronizacao.class.php';
$p = new Pessoa;
$p->nomeCompleto = Padronizacao::maiMin(Padronizacao::juntarNome($_POST['nome'], $_POST['sobrenome']));
$p->dataNasc = Padronizacao::juntarData($_POST['ano'], $_POST['mes'], $_POST['dia']);
$p->renda = $_POST['renda'];
$p->email = Padronizacao::min($_POST['email']);
$p->sexo = Padronizacao::min($_POST['sexo']);
$p->cpf = $_POST['cpf'];
$p->rg = $_POST['rg'];
$_POST['complemento'] == null ? $p->endereco = '' :  $p->endereco = Padronizacao::maiMin($_POST['endereco']);
$p->complemento = Padronizacao::min($_POST['complemento']);
$p->bairro = Padronizacao::maiMin($_POST['bairro']);
$p->cep = $_POST['cep'];
$p->cidade = Padronizacao::maiMin($_POST['cidade']);
$p->estado = Padronizacao::mai($_POST['estado']);

$_SESSION['p'] = serialize($p);
header("location: ../resposta.php");
