<?php
   $valor = $_GET['txtValor'];
   $hora = $_GET['txtHora'];
   $gratificacao = $_GET['txtGratificacao'];
   $saldo = $hora * $valor + $gratificacao;
   echo "O Salário é: " . $saldo;
   echo "O valor do salário é esse";
?>
