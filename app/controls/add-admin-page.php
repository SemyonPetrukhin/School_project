<?php 

include("../app/database/db.php"); 
$message = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-addch'])){
    $name = trim($_POST['name']);
    $link = trim($_POST['link']);
    $description = trim($_POST['description']);


    if ($username === '' || $link === '' || $description === ''){
        $message = 'Не все поля заполнены!';

    } else{

        $post = [
            'name' => $name,
            'link' => $link,
            'description' => $description,

        
        ];
        $id = insert('channels', $post);
        
        //header('location: ' . BASE_URL . 'blog.php');

    }

}

?>