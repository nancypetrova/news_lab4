<?php
    require_once 'database.php' ;
    require_once 'models/articles.php' ;

    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $articles = articles_all(@$link);
    
    include("views/articles.php")
?>