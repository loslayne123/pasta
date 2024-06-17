<?php 

include('db.php');

$nome = $_POST["u"];
$mensagem = $_POST["c"];
$avaliacao = $_POST["v"];

$sql = "INSERT INTO Feedback (`NOME`, `MENSAGEM`, `CLASSIFICACAO`) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $mensagem, $avaliacao]);

?>