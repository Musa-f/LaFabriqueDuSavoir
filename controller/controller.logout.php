<?php
    session_start();
    session_destroy();
    header('Location: controller.pages.php');

