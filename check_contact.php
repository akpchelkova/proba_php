<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);

    function redirect() {
        header("Location: last.php");
        exit();
    }


    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 2) {
        $_SESSION['error_username'] = "Имя должно быть больше 2 символов";
        redirect();
    }
    elseif(strlen($from) < 5 || strpos($from, '@') == false) {
        $_SESSION['error_email'] = "Введите корректный email";
        redirect();
    }
    elseif(strlen($subject) <= 5) {
        $_SESSION['error_subject'] = "Тема сообщения должна быть больше 5 символов";
        redirect();
    }
    elseif(strlen($message) <= 10) {
        $_SESSION['error_message'] = "Сообщение должно быть больше 10 символов";
        redirect();
    }
    else {
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail("annapchelka75@mail.ru", $subject, $message, $headers);
        $_SESSION['success'] = "Сообщение отправлено!";
        redirect();
    }
?>