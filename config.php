<?
    // Holds database connection
     
    define('DB_HOST', 'localhost');
    define('DB_USER', 'citpics');
    define('DB_PASS', 'c1tp1csDBPa55');
    define('DB_DB', 'citpics');

    //database connection
    @$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);

    //Check for connection error
    if (mysqli_connect_errno()){
        echo "Database Connection Issue";
        exit();
    }


?>