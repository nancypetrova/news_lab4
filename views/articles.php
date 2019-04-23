<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&amp;subset=cyrillic" rel="stylesheet">
    <style>
*{
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    text-decoration: none;
}
body{
    background: rgb(238, 238, 238);
}
header{
    z-index:100;
    /* display: grid;
    align-content: center; */
    position: fixed;
    width: 100vw;
    height: 50px;
    background: white;
    color: rgb(0, 0, 0);
    /* text-align: center; */
    font-weight: 800;
    font-size: 25pt;
    box-shadow: 0px 1px 4px black;
    padding-left: 20px;
    padding-top:10px;
    top:-5px;
}
header a{
    opacity:0.1
}
.fullscreen-bg {
    overflow: hidden;
    z-index: -100;
    position: fixed;
    height: 100%;
    width: 100%;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
}
 
.fullscreen-bg__video {
    position: absolute;
    width: auto;
    min-width: 100%;
    height: auto;
    min-height: 100%;
}
.overflow{
    position: fixed;
    width: auto;
    min-width: 100%;
    height: auto;
    min-height: 100%;
    background: rgb(34, 34, 34);
    opacity:0.6;
}
.blogline{
    position: fixed;
    width: 630px;
    height: 100vh;
    left: 35px;
    background: rgb(255, 255, 255);
    opacity:0.4;
}
.hello{
    position: fixed;
    width: calc(100% - 690px);
    height: 100vh;
    top:100px;
    left:690px;
    /* background: rgb(201, 201, 201); */
    background-size: cover;
    color: white;
    text-align: right;
    font-weight: 800;
    font-size: 45pt;
    text-align: center;
    opacity:0.7;
}
.hello img{
    width:40px;
    margin-left:7px;
    opacity: 0.7;
    float:left;
}
.hello img:hover{
    opacity:1;
}
.hello__center{
    position: absolute;
    left: calc(50% - 70.5px);
}
.blog{
    top:100px;
    position: relative;
    width: 650px;
    height: 250px;
    left: 20px;
    background: rgb(255, 255, 255);
    box-shadow: 0px 1px 2px black;
    border-radius: 10px;
    padding-left: 10px;
    margin:10px 0px;
}
.blog h3{
    font-size: 33pt;
}
    </style>
</head>
<body>
        <header>Новостной портал о жизни ПОНИ <a href="admin">Панель управления</a></header>
        <div class="overflow"></div> 
        <div class="fullscreen-bg">
            <video loop muted autoplay center poster="img/back1.jpg" class="fullscreen-bg__video">
           <?php echo "<source src='img/back.mp4' type='video/mp4'>" ?>
            </video>
        </div>  
        <div class="hello">
            Новостной портал о ПОНИ <br>
            <div class="hello__center">
                <a href=""><?php echo '<img src="img/twitter.svg" alt=""' ?></a>
                <a href=""><?php echo '<img src="img/vk.svg" alt=""' ?></a>
                <a href=""><?php echo '<img src="img/instagram.svg" alt=""' ?></a>
            </div>
            
        </div>
        <div class="blogline"></div>
        <div>
        <?php foreach ($articles as $a): ?> 
            <div class="blog">
                <h3><a href="article.php?id=<?=$a['id']?>">
                        <?=$a['title']?>
                    </a></h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?>...</p>
            </div>
        <?php endforeach ?> 
        </div>
</body>
</html>