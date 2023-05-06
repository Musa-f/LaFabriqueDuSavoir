<?php

$ids_img = select_all_id_img($bdd);
$array_ids_img = [];
foreach($ids_img as $id_img){
    $parts = explode('_', $id_img[0]);
    $last_part = end($parts);
    $inner_parts = explode('.', $last_part);
    $result = array_shift($inner_parts);
    $array_ids_img[] = $result;
}
$last_id_img = max($array_ids_img);
$last_id_post = (select_max_id_post($bdd)[0])+1;

$id_user = $_SESSION['user']['id_user'];
$id_post = $_GET['id'];
$post = select_post($bdd, $id_post);
$errors = [];
$file_name;
$id_image;
$file_size;

if(isset($_POST['submit'])){

    //Si le post est existant
    if($id_post > 0){
        echo "post existe déjà";
    }

    //Si nouveau post
    if($id_post == 0){
        if(isset($_POST['title']) && isset($_POST['content']) && !empty($_POST['title']) && !empty($_POST['content'])){
            $title = $_POST['title'];
            $content = $_POST['content'];
    
            insert_post($bdd, $title, $content, $id_user);
    
            if(isset($_FILES) && $_FILES['file']['tmp_name'] != null){
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $file_name = $_FILES['file']['name'];
                $file_size = $_FILES['file']['size'];
        
                $tabExtension = explode('.', $file_name);
                $extension = strtolower(end($tabExtension));
                $extensions = ['jpg', 'png', 'jpeg'];
                $maxSize = 400000;
        
                if(in_array($extension, $extensions) && $file_size <= $maxSize){
                    $renamed_url_img = 'post_'.($last_id_img+1).'.'.$extension;
                    echo $renamed_url_img;
                    move_uploaded_file($file_tmp_name, '../assets/uploads/'.$renamed_url_img);
        
                    //insérer la ligne dans la table images en prenant le dernier id+1
                    $id_image = $renamed_url_img;
                    insert_image($bdd, $id_image, $file_name, $file_size);
                }else{
                    $errors[] = "Une erreur est survenue lors du téléchargement.";
                }
            }else{
                $id_image = "post_1.jpg";
            }
        
            insert_post_image($bdd, $id_image, $id_user, $last_id_post);
            
        }else{
            $errors[] = "Un article doit contenir un titre et un message.";
        }
    
        if(!empty($errors)){
            var_dump($errors);
        }
    }
}

