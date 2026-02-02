<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+SQL</title>
</head>
<body>
<?php
    $mysql = new mysqli("mysql", "root", "root", "mydb");
    $mysql->query("SET NAMES 'utf8'");

    $result = $mysql->query("CREATE TABLE IF NOT EXISTS `example` (
        id INT(11) NOT NULL,
        name VARCHAR(50) NOT NULL,
        bio TEXT NOT NULL,
        PRIMARY KEY(id)
    )");

    // $mysql->query("INSERT INTO `example` (name, bio) VALUES
    //     ('Иван Владимирович', 'Привет! Я наркоман, но трава - это не наркотики, поэтому не наркоман, мяу.'),
    //     ('Александр Булыгин', 'Здравствуйте! Я люблю ненатурально, а ещё меня все зовут Куванов.')");

    // $mysql->query("UPDATE `example` SET `name` = 'Куваненко', `bio` = 'Привет! Я родился от эко.' WHERE `id` = 2");

    $result = $mysql->query("SELECT * FROM `example`");
    $row = $result->fetch_assoc();
    echo '<br>' . "Инфо об участниках: ". $row['bio'];

    if($result) {
        echo "Таблица создана успешно!";
    } else {
        echo "Ошибка при создании таблицы: " . $mysql->error;

    }

    $mysql->close();
?>
</body>
</html>
