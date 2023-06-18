<?php

$localhost = "db4free.net";
$username = "meloccmat";
$password = "njft765vcx";
$database = "datastore";

$conecta = mysqli_connect($localhost, $username, $password, $database);

if ($conecta->connect_errno) {
    echo "Erro na compra";
}
else {
    echo "Compra efetuada";
}
?>