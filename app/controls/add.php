<?php 

include("app/database/db.php"); 
$message = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-add'])){
    $username = trim($_POST['username']);
    $link = trim($_POST['chn_link']);

    if ($username === '' || $link === ''){
        $message = 'Не все поля заполнены!';

    } else{

        $post = [
            'username' => $username,
            'link' => $link,
        
        ];
        $id = insert('application', $post);
        $message = 'Заявка успешно отправлена';

    }

}






?>