<?php
//Verificação do login do usuário
$emailCliente=$_POST['loginUsuario'];
$senhaCliente=$_POST['senhaUsuario'];

echo 'Seu usuário é '.$emailCliente.'e sua senha é '.$senhaCliente;