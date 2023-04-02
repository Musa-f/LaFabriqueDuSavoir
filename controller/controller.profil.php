<?php

if(isset($_SESSION['user'])){
    $idUser = $_SESSION['user']['id_user'];
    $dataUser = select_data_user($bdd, $idUser);
}