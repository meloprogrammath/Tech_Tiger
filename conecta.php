<?php
include_once('adm.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$pagamento = $_POST['pagamento'];

$query = "INSERT INTO cadastro (nome, email, telefone, endereco, numero, complemento, cpf, idade, pagamento) VALUES ('$nome', '$email', '$telefone', '$endereco', '$numero', '$complemento', '$cpf', '$idade', '$pagamento')";

$resultado = mysqli_query($conecta, $query);

?>