<?php
    $title = "Регистрация";
    require "patterns/header.php";
?>
<?php
    print_r($_GET);
?>

<?php
    // $file = fopen("data.txt", "a+");

    // fwrite($file, "\nИмя: Анна\n");

    // fclose($file);

    $filename = "data.txt";

    $file = fopen("data.txt", "r+");

    $content = fread($file, filesize($filename));

    fclose($file);

    echo "<pre>" . $content . "</pre>";

    // новые функции

    file_put_contents("test.txt", "\nHello?\n");
    echo file_get_contents("test.txt");

    // rename("test.txt", "newtest.txt");
    // unlink("newtest.txt");

    echo fileperms(__FILE__) . "<br>";
    chmod(__FILE__, 33206);
    echo fileperms(__FILE__);
?>

<?php
    require "patterns/footer.php";
?>



