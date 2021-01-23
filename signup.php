<?  
    //require_once("header.php");
    require_once("config.php");

    if(!empty($_POST)){

    // This is where i will pull data from user and store it inside the database
        $ID = null;
        $Fname = htmlspecialchars(trim($_POST['Fname']));
        $Lname = htmlspecialchars(trim($_POST['Lname']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = md5(htmlspecialchars(trim($_POST['password'])));
        $zipcode = htmlspecialchars(trim($_POST['zip']));
        $admin = 0;

          // echo($ID);
          // echo($Fname);
          // echo($Lname);
          // echo($email);
          // echo($password);
          // echo($zipcode);
          // exit();

        $query = "INSERT into user VALUES(?, ?, ?, ?, ?, ?, ?)";     
        // Preparing Query
        $stmt = $db->prepare($query);

        $stmt->bind_param("sssssss", $ID, $Fname, $Lname, $email, $password, $zipcode, $admin);
        //Execute
        $stmt->execute() or die("Error uploading");
        //Store result
        $stmt->store_result();


        if($stmt->affected_rows == 1)
        {
            $message = array("message"=>"success");
        }
        else{
            $message = array("message"=>"FAILED");
        }

        echo json_encode($message);
        
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up For CITPics!</title>

    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />

    <!-- Main css -->
    <link rel="stylesheet" href="css/SIGNUP.css" />
  </head>
  <body>
    <div class="main">
      <!-- Sign up form -->
      <section class="signup">
        <div class="container">
          <div class="signup-content">
            <div class="signup-form">
              <h2 class="form-title">Sign up</h2>
              <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>" class="register-form" id="register-form">
                <div class="form-group">
                  <label for="name"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="Fname"
                    id="Fname"
                    placeholder="Your First Name"
                  />
                </div>
                <div class="form-group">
                  <label for="name"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="Lname"
                    id="Lname"
                    placeholder="Your Last Name"
                  />
                </div>
                <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-email"></i></label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                  />
                </div>
                <div class="form-group">
                  <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group">
                  <label for="zipcode"
                    ><i class="zmdi zmdi-globe-alt"></i
                  ></label>
                  <input
                    type="zipcode"
                    name="zip"
                    id="zip"
                    placeholder="Enter your Zip Code"
                  />
                </div>
                <div class="form-group form-button">
                  <button id='addUserButton' class="btn">Registar</button>
                </div>
              </form>
            </div>
            <div class="signup-image">
              <figure>
                <img src="img/CITPICS_LogoAmerica.png" alt="sing up image" />
              </figure>
              <a href="login.php" class="signup-image-link"
                >I am already member</a
              >
              <div>
                <p>
                  CIT Pics is a photo Sharing/Commenting application built by
                  Marshall Univeristy CIT Students!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- JS -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?
  //require_once("footer.php");
?>
