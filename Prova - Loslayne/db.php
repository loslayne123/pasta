<?php 
 $dsn = 'mysql:host=localhost;dbname=id22181046_facasuaparte;charset=utf8';
 $usuario = 'id22181046_viclos';
 $senha = 'LOSVIC123@a';

 try{
   $pdo = new PDO($dsn, $usuario, $senha);
   $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
 }catch(PDOException $e){
   echo 'ERRO DE CONECSÃO' .  $e->getMessage();
   exit();
 }
?>