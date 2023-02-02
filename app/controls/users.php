<?php 

include("app/database/db.php"); 

$errMsg = '';


// Код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-reg'])){

    $admin = 0;
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $rePass = trim($_POST['rep_password']);

    if ($username === '' || $email === '' || $pass === ''){
        $errMsg = 'Не все поля заполнены!';

    } elseif(mb_strlen($username, 'UTF8') < 3){
        $errMsg = 'Юзернейм должен быть больше трёх символов!';
    } elseif($pass !== $rePass){
        $errMsg = 'Пароли должны совпадать!';
    } else{
        $existence = selectOne('users', ['email' => $email]);
        if ($existence['email'] === $email){
            $errMsg = 'Пользователь с таким Email уже существует!';
        } else{ 
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $username,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            
            if ($_SESSION['admin'] == 1){

                header('location: ' . BASE_URL . 'admin/admin.php');
            } else{
                header('location: ' . BASE_URL);
            }
            
        }   
    }  
} else{
    $username = '';
    $email = '';
}


// Код для формы входа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-log'])){

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if ($email === '' || $pass === ''){
        $errMsg = 'Не все поля заполнены!';
    } else{
        $existence = selectOne('users', ['email' => $email]);
        if ($existence && password_verify($pass, $existence['password'])){
            $_SESSION['id'] = $existence['id'];
            $_SESSION['username'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];

            if ($_SESSION['admin'] == 1){
                header('location: ' . BASE_URL . 'admin/admin.php');
            } else{
                header('location: ' . BASE_URL);
            }
        } else{
            $errMsg = 'Почта или пароль введены неправильно!';
        }
    }
} else{
    $email = '';
}


?>