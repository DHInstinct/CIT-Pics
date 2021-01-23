<?
       require_once("header.php");
?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?
  if(isset($_SESSION['userloggedin']))
  {
    echo "<h1 class='text-center'> Welcome to CITPics " . $_SESSION['userloggedin'] . " " .$_SESSION['lastname'] . "</h1>";
  }
  else{
    echo("<div class='container'>
    <div class='row'>
      <div class='col-6'> 
       <h1 class='text-center padbottom'>Don't have an account ? Create One!</h1>
       <h3 class='text-center'>
       Click  <a href='signup.php'> here </a> to create an account!
       </h3>
      </div>
    
      <div class='col-6'> 
       <h1 class='text-center padbottom'>Already have an account? Login! </h1>
       <h3 class='text-center'>
       Click <a href='login.php'> here </a> to Login!
       </h3>
      </div>
      </div>
    
      </div> <!-- end of row div -->");
  }

?>

  <br>
  <br>
  <br>
  <br>

  <div class="container starter-template text-center">
  <h2>CIT Pics is a photo sharing and commenting application built by Marshall CIT students!</h2>
    <p class="lead">The goal of CIT pics is to help student learn advanced web devlopment skills.<br> </p>

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    <?
        require_once("footer.php");
?>
