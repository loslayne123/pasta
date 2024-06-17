 <?php 
   
     include('db.php');
     $stmt = $pdo->prepare("SELECT * FROM Feedback WHERE 1");
     $stmt->execute();

     while($info = $stmt->fetch(PDO::FETCH_ASSOC)) {
           echo("Usuário " . $info["NOME"] . " classificou o site como: " . $info["MENSAGEM"] . " e deu " . $info["CLASSIFICACAO"] . " estrelas <br>");
     }
   ?> 