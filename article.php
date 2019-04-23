<?php
    require_once 'database.php' ;
    require_once 'models/articles.php' ;
    
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $article = articles_get($link, $_GET['id']);

    include("views/article.php")
?>