<?php
    $text = $_POST['text'];
    $file = fopen("text.txt", "at");
    ftruncate($file, 0);
    fwrite($file,"$text");
    fclose($file);
?>