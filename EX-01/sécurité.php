<?php

session_start();

    $_FILES ['Login'];
    $_FILES ['Password'];

   $Login= $_POST['Login'];
   $Password=$_POST ['Password'];
   
       if (($Password != 2020))
       {
       echo "<p> Mauvais couple identifiant / mot de passe. </p>";
       echo '<a href="connexion.php"> Connexion</a>';
       }
    
       else
       {
       echo '<p>Login :' .($_POST['Login']). '</p>';
       echo '<p>Password:' .($_POST['Password']). '</p>';
       $_SESSION['id']=$Login;
       echo '<a href="mini-site-routing.php"> Accueil</a>';
       setcookie('id',$_SESSION['id']);
       echo '<a href="admin.php"> Admin </a>';
    }

?>