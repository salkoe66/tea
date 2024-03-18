<?php 
      $link = new mysqli("localhost", "root", "", "tea");
      if (isset($_POST['reg'])){
        $link->query("INSERT INTO `users`(`email`, `login`, `password`, `password-repeat`) 
        VALUES ('{$_POST['email']}','{$_POST['login']}','{$_POST['password']}','{$_POST['password-repeat']}')");
        header ("Location: ../log.php");
      }
?>