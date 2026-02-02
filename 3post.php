<?php
    $title = "Регистрация";
    require "patterns/header.php";
?>

<?php
    $age = $_POST['age'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(trim($username) == '') {
        echo "Введите имя!";
    } elseif(!is_numeric($age) || $age < 18) {
        echo "Вы несовершеннолетний!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Введите корректный email!";
    } elseif(trim($message) == '') {
        echo "Напишите хоть что-то!";
    } else {
        echo "Спасибо за регистрацию, $username!";
    }

    echo "<br><h1>Варианты вывода информации пользователя</h1>";
    
    echo "<br><h2>Все данные: </h2><p>$username</p>$email<p>$message</p><p>$age</p>";
    
    echo print_r($_POST) . "<br>";

    foreach($_POST as $key => $value) {
        echo "<br><p>$key -> $value</p>";
    }
?>

<?php
    require "patterns/footer.php";
?>