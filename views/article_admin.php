<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Тест</h1>
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" autofocus required>
            </label>
            <label>
                ДАТА
                <input type="text" name="date" value="<?=$article['date']?>" required>
            </label>
            <label>
                Содержимое
                <textarea name="content" required><?=$article['content']?></textarea>
            </label>
            <input type="submit" value="Сохранить">
        </form>
    </div>
</body>
</html>