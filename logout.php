<?
    // clear sessions and cookies.
    session_start();
    session_destroy();

    header('location:index.php');


?>