<?php
 session_start();

  //vérifier que le nom est bien remplie
  if (! empty($_POST['pname']))
  {
  
    // connexion à la base de donéées
  $conn = new PDO('mysql:host=localhost;dbname=epitech_test', 'root', '');

  // Préparation de la requete d'insertion
  $stmt = $conn->prepare('INSERT INTO profil (pname, cname, mail, phone)
  VALUES (NULL, :pname, :cname, :mail, phone)');
   
   // Lier chaque marqueur à une valeur
   $stmt->bindValue(':pname',$_POST['pname'], PDO::PARAM_STR);
   $stmt->bindValue(':cname',$_POST['cname'], PDO::PARAM_STR);

   $stmt->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
   $stmt->bindValue(':phone',$_POST['phone'], PDO::PARAM_STR);

   // Execution de la requete
  $stmt->execute();
 

  header('Location : /userProfil.html');
 

$stmt->closeCursor();

 
} else{
  echo('veuillez remplir le nom') ;
  header('Location : /index.html');
}
?>