<?php

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    if(isset($_FILES)){
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        //move_uploaded_file($file_tmp_name, '../assets/uploads/'.$file_name);
    }else{
        $error;
    }
    
}