<?php
    $link = mysqli_connect('127.0.0.1','root','Test123');
    if (!$link) {
        die('Error:'. mysqli_connect_error());
    }
    echo "Good!";
    mysqli_close($link);

?>