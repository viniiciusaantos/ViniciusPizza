<?php
//Cadastro de clientes preenchido em 'criarConta.html'
$nomeCliente = $_POST['nomeUsuario'];
$emailCliente = $_POST['emailUsuario'];
$sexoCliente = $_POST['sexoUsuario'];
$senhaCliente = $_POST['senhaUsuario'];
$verificacaoSenha = $_POST['verificacaoSenhaUsuario'];
$confirmacaoSenha;
$telefoneCliente = $_POST['telefoneUsuario'];
$enderecoCliente = $_POST['enderecoUsuario'];
$numeroEnderecoCliente = $_POST['numeroEnderecoUsuario'];
$complementoEnderecoCliente = $_POST['complementoEnderecoUsuario'];
$bairroCliente = $_POST['bairroUsuario'];
$cidadeCliente = $_POST['cidadeUsuario'];

if ($senhaCliente == $verificacaoSenha){
    $confirmacaoSenha = true;
    echo 'O nome é '.$nomeCliente,' e a cidade é '.$cidadeCliente.' e o sexo é '.$sexoCliente;
}
else{
    $confirmacaoSenha = false;
    echo 'Senha não confere';
}

unset ($verificacaoSenha);

