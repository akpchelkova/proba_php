<?php
    $title = "Главная шняга";
    require "patterns/header.php";
?>

<?php
    mb_internal_encoding('UTF-8');

    define('AGE', 20);
    echo "Мне " . AGE . " лет.<br>";

    define('NAME', 'АННА');
    echo "Hello, " . mb_strtolower(NAME) . "!<br>";

    $cifra1 = 52.3;
    $cifra2 = -10.4;
    $cifra3 = $cifra1 + $cifra2;
    echo "<i>Anna</i> <b>is</b> beauty";
    echo "<br>$cifra1";
    echo '<br>' . $cifra2;
    echo "<br> Сумма цифр: $cifra3";
    echo '<br>' . 'Разница цифр: ' . ($cifra1 - $cifra2);
    echo '<br>' . "Число e: " . M_E;
    echo '<br>' . abs($cifra2);
    echo '<br>' . ceil($cifra2) . " " . floor($cifra1) . " " . round(M_E, 3);
    echo '<br>' . mt_rand(1, 100);
    echo '<br>' . "<input type = 'button' value = 'Нажми меня!'>";
    echo '<br>' . "<input type = 'text' placeholder = 'Ваше имя'>";
    echo '<br>' . "<input type = 'text'" . '</br>';
    echo '<br>' . 'это цифра 1: ' . gettype($cifra1);

    $arr = ["height" => 158.5, "weight" => 54.2, "age" => AGE, "name" => NAME];
    unset($arr[0]);
    $arr = array_values($arr);

    foreach($arr as $a => $b)
        echo '<br>' . $a . ': ' . $b;


    function myF($info) {
        echo "<br> Mояшкина - $info!";
    }

    myF('mama');

    function sum($arr) {
        $totalvalue = 0;
        foreach($arr as $value) {
            $totalvalue += $value;
        }
        echo "<br> Сумма массива: $totalvalue";
        return $totalvalue;
    }

    sum(range(1, 100, 5));

?>  

<?php
    require "patterns/footer.php";
?>
