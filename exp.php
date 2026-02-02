<?php
    $title = "Эксперименты с PHP";
    require "patterns/header.php";
?>

<!-- Отправка письма!!!!!!!! -->

<?php
    $message = "Письмо в бутылке";
    $from = "annapchelka75@mail.ru";
    $to = "annapchelkova41@gmail.com";
    $subject = "Какая-то тема";

    $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

?>

<?php
    $arr = ["Brand" => "Apple", "Type" => "Laptop", "Model" => "Macbook Air", "M version" => 4, "Memory" => 512];
    $keys = array_keys($arr);

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['index'])) {
        $userIndex = (int)$_POST['index'];
        $index = $userIndex - 1;

        // ДЛЯ АССОЦИАТИВНОГО МАССИВА
        // if(in_array($index, $arr) == "") {
        //     echo "<br> Элемента под таким номером нет, скорее всего введите что-то меньше.";
        // } else {
        //     echo "<br> Данные под номером " . $userIndex . " : " . $arr[$index];
        // }

        // ДЛЯ НОРМАЛЬНОГО МАССИВА
        if($index >= 0 && $index < count($arr)) {
            $key = $keys[$index];
            echo "<br> Данные под номером " . $userIndex . " : " . $arr[$key];
        } else {
            echo "<br> Элемента под таким номером нет, скорее всего введите что-то меньше.";
        }
    }

?>

<form method="post">
    <input type="number" name='index' placeholder="Введите номер элемента массива" class="form-control">
    <input type="submit" value="Ввод" class="form-control">
</form>

<?php
    echo "<br> Массив содержит: " . count($arr) . " элементов: ";
    foreach($arr as $key => $value) {
        echo "$key, ";
    }
?>


<?php
    require "patterns/footer.php";
?>

<?php
    // phpinfo();
?>