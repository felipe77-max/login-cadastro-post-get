<meta charset="utf-8"/>

<?php
$nomeDoUsuario = $_POST["nome"];
$cpfDoUsuario = $_POST["cpf"];
$idadeDoUsusario = $_POST["idade"];
$filtro = $_GET["filtro"];
echo "$nomeDoUsuario, Cadastro realizado com sucesso na $filtro";

?>