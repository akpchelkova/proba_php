<?php
    session_start();
    $title = "Информация обо мне";
    require "patterns/header.php";
?>

<h1>Ну типо вот она я</h1>


<?php
    $user_name = "Ann";
    setcookie("user_name", $user_name, time() + 1200); // куки живут 20 минут
    // print_r($_COOKIE ); просто какая-то запись всех куки
    if(isset($_COOKIE['user_name'])) {
        $name = $_COOKIE['user_name'];
        echo "<br> Привет, $name! Как твои дела?";
    } else {
        echo "<br> Привет, гость! Как твои дела?";
    }

    unset($_SESSION['user_name']);

    $_SESSION['fav_color'] = 'blue';
    if(isset($_SESSION['fav_color'])) {
        $color = $_SESSION['fav_color'];
        echo "<br> Твой любимый цвет: " . $_SESSION['fav_color'];
    }
?>



<form action="3post.php" method="post">
    <h2>Адекватный способ <br></h2>
    Введите ваше имя: <input type="text" name="username" class="form-control"><br>
    Введите ваш возраст: <input type="number" name="age"><br>
    Введите ваш email: <input type="email" name="email"><br>
    <textarea name="message" class="form-control" placeholder="Расскажи о своих сильных сторонах"></textarea>
    <input type="submit" value="Отправить">
</form>

<form action="3get.php" method="get">
    <h2>URL способ <br></h2>
    Введите ваше имя: <input type="text" name="username" class="form-control"><br>
    Введите ваш возраст: <input type="number" name="age"><br>
    Введите ваш email: <input type="email" name="email"><br>
    <textarea name="message" class="form-control" placeholder="Расскажи о своих сильных сторонах"></textarea>
    <input type="submit" value="Отправить">
</form>

<?php
    
?>

<?php
    require "patterns/footer.php";
?>