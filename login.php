<?
    require_once("config.php");
    require_once("header.php");

    if(!empty($_POST))
    {
        //processing user login
        $email = htmlspecialchars(trim($_POST['email']));
        $password = md5(htmlspecialchars(trim($_POST['password'])));
                
        //Making a query
        $query = "select u_ID, u_FName, u_LName, u_isAdmin from user where u_Email=? and u_Password=?";     
        // Preparing Query
        $stmt = $db->prepare($query);
        // bind parameters
        $stmt->bind_param("ss", $email, $password);
        //Execute
        $stmt->execute();
        //Store result
        $stmt->store_result();

        if($stmt->num_rows == 1)
        {
            $stmt->bind_result($u_ID, $u_FName, $u_LName, $u_isAdmin);
            //get record
            $stmt->fetch();
            //setting session
            $_SESSION['userloggedin'] = $u_FName;
            $_SESSION['lastname'] = $u_LName;
            $_SESSION['userID'] = $u_ID;

            // echo($_SESSION['userID']);
            // exit();


            if($u_isAdmin == 1)
            {
                $_SESSION['admin'] = $u_isAdmin;
                header('location:admin.php');
            }
            else
            {
                //redirecting
                header("location:gallery_profile.php");
            }
        }
        
        

        if($stmt->num_rows == 0){
            $error = "Invalid username/password. Please try again!";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign In to CITPics!</title>

    <!-- Font Icon -->
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />

    <!-- Main css -->
    <link rel="stylesheet" href="css/SIGNUP.css" />
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="main">
<!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/CITPICS_LogoAmerica.png" alt="sing up image"></figure>
                        <br />
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form action='<?=$_SERVER['PHP_SELF'];?>' method="POST" class="register-form" id="login-form">
                            <?
                            //Displaying and error if user doesn't login correctly, else do nothing.
                            echo(!empty($error) ? "<div class='alert alert-danger' role='alert'>$error</div>": "");
                            ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="emailInput" placeholder="Email Address"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="passInput" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

  <!-- JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
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