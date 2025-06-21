<?php
    $link = mysqli_connect('db','root','Test123');
    if (!$link) {
        die('Error:'. mysqli_connect_error());
    }
    echo "Good!";
    mysqli_close($link);

?>
