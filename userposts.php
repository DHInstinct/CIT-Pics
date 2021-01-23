<?
    include_once("header.php");
    include_once("config.php");

    if($_SESSION['admin'] == 0)
         header("location:feed.php");

	$ID = $_GET['ID'];


?>

<div><p> This is some text... </p></div>


<?
    include_once("footer.php");
?>