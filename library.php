<?php

if (! empty($_POST['pname'])) 
{
require 'connection.php';
$stmt = $conn->prepare('INSERT INTO library (lname, cname, mail, phone)
VALUES (NULL, :lname, :cname, :mail, phone)');
 
 // Lier chaque marqueur à une valeur
 $stmt->bindValue(':lname',$_POST['lname'], PDO::PARAM_STR);
 $stmt->bindValue(':cname',$_POST['cname'], PDO::PARAM_STR);

 $stmt->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
 $stmt->bindValue(':phone',$_POST['phone'], PDO::PARAM_STR);

 // Execution de la requete
    $stmt->execute();


    header('Location : /userProfil.html');

} else{
echo('veuillez remplir le nom') ;
header('Location : /index.html');
}
$stmt->closeCursor();
?>





