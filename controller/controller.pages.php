<?php
session_start();
include 'controller.model_links.php';

$path = "/la_fabrique_du_savoir";

//Scans a directory for all files and directories inside it and returns an array of their names
$pagesController = scandir("../controller/");
$pagesView = scandir("../view/");

$pageView = "view.homepage"; 


//Checks if the GET parameter 'page' is set and corresponds to an existing .php file in the 'view/' directory. If so, the variable $page is set to the corresponding value
if(isset($_GET['page'])){
    if(in_array($_GET['page'].'.php', $pagesView)){
        $pageView = $_GET['page'] . '.php';
    }
}

//Checks if the current view file has a corresponding controller file. If the controller file exists, it is included in the current page
if(file_exists("../view/$pageView")){
    $pageName = $_GET['page'];
    $pageName = substr($pageName, strlen('view.'));
    $checkPageController = 'controller.'.$pageName.'.php';
    if(in_array($checkPageController, $pagesController)){
        include $checkPageController;
    }
}

if($pageView == "view.homepage"){
    include "controller.homepage.php";
}

//Checks if a CSS file exists for the current page and sets a variable $style to the page name if it exists. The $style variable can be used to link the corresponding CSS file in the HTML header
if(file_exists("../view/$pageView")){
    $csslink = $_GET['page'];
    $csslink = substr($csslink, strlen('view.'));
    $style = $csslink;
}

include "../view/view.header.php";

//Includes the corresponding view file based on the value of $page if it exists in the 'view/' directory. If the file doesn't exist, the default 'view.homepage.php' file is included instead
if(file_exists("../view/$pageView")){
    include "../view/$pageView";
}else{
    include "../view/view.homepage.php";
}

include "../view/view.footer.php";

?>
