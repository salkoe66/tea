<?php 
    include "../components/core.php";

    if (isset($_POST['log'])){
        $users = $link->query("SELECT `id`, `isAdmin` FROM `users` WHERE 
        `login` = '{$_POST['login']}' AND `password` = '{$_POST['password']}'");

        if($users->num_rows > 0 ){
            $user = $users->fetch_assoc();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'isAdmin' => $user['isAdmin'], 
            ];
            header ("Location: ../admin_panel.php");        
        } else {
            echo "Не удалось войти. Проверьте логин или пароль";
        }
    }
    ?>