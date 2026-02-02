<?php
    session_start();
    $title = "Контактная информация";
    require "patterns/header.php";
?>

<h2 class="mt-5">Связь со мной</h2>

<div class="text-success"><?=$_SESSION['success']??''?></div>

<form action="check_contact.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['username']??''?>" placeholder="Введите ваше имя: " class="form-control">
    <div class="text-danger"><?=$_SESSION['error_username']??''?></div><br>
    Введите ваш email: <input type="email" name="email" value="<?=$_SESSION['email']??''?>" class="form-control"><br>
    <div class="text-danger"><?=$_SESSION['error_email']??''?></div><br>
    Введите тему сообщения <input type="text" name="subject" value="<?=$_SESSION['subject']??''?>" class="form-control"><br>
    <div class="text-danger"><?=$_SESSION['error_subject']??''?></div><br>
    Сообщение: <br>
    <textarea name="message" value="<?=$_SESSION['message']??''?>" class="form-control" placeholder="Ваше сообщение"></textarea><br>
    <div class="text-danger"><?=$_SESSION['error_message']??''?></div><br>
    <input type="submit" value="Отправить" class="btn btn-success"><br>
</form>

<?php

?>

<?php
    require "patterns/footer.php";
?>
