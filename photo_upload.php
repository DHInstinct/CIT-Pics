<?
    require_once("header.php");
    require_once("config.php");

    
    //checking if user is logged in
    if(empty($_SESSION['userloggedin']))
    {
        header('location:index.php');
    }
    
    

    // Photo Upload
    if(!empty($_POST))
    {
        $p_ID = null;
        $p_Filename = htmlspecialchars(trim($_FILES['fileimg']['name']));
        $p_Title = htmlspecialchars(trim($_POST['title']));
        $p_Summary = htmlspecialchars(trim($_POST['caption']));
        $p_Upload = date("Y-m-d H:i:s");
        $p_Likes = 0;
        $u_ID = htmlspecialchars(trim($_SESSION['userID']));

        // echo("P_ID: " . $p_ID . "<br />");
        // echo("FILE NAME: " . $p_Filename . "<br />");
        // echo("TITLE: " . $p_Title . "<br />");
        // echo("SUMMARY: " . $p_Summary . "<br />");
        // echo("UPLOAD: " . $p_Upload . "<br />");
        // echo("LIKES: " . $p_Likes . "<br />");
        // echo("U_ID: " . $u_ID . "<br />");
        // exit();

     $query = "INSERT into pic VALUES(?, ?, ?, ?, ?, ?, ?)";     
     // Preparing Query
     $stmt = $db->prepare($query);

     $stmt->bind_param("sssssss", $p_ID, $p_Filename, $p_Title, $p_Summary, $p_Upload, $p_Likes, $u_ID);
     //Execute
     $stmt->execute() or die("Error uploading");
     //Store result
     $stmt->store_result();

     if (!empty($_POST))
     {
     // our super global $_FILES array holds files submitted as form data
        if ($_FILES['fileimg']['type'] != "image/jpeg")
        {
            $error = "<h1>JPGs only</h1>";
        }

        // check for file less than 5MB in size 
        if ($_FILES['fileimg']['size'] > 5000000)
        {
            $error = "<h2>File is too large.  Must be under 5MB in size.<h2>";
        }

        // move the file onto our server if there is no error
        if (!isset($error))
        {
            $success = move_uploaded_file($_FILES['fileimg']['tmp_name'], "http://cit.marshall.edu/CIT313/uploads/" . $_FILES['fileimg']['name']);
            
            if($success)
            {
                $query = "INSERT INTO pic p_Filename='" . $_FILES['fileimg']['name'] . "'";
                $stmt = $db->prepare($query);
                $stmt->execute();
            }
        }
    }
}
    //move_uploaded_file($p_Filename, "http://cit.marshall.edu/CIT313/uploads/");
  
?>
            <!-- Start of photo upload -->
            <br />
            <br />
            <br />
            <br />
                <div class="container">

           
                    <div class='row'> 
                    <div class="col-md-6">
                        <img src='img/CITPICS_LogoAmerica.png'>
                    </a>
                    <br>
                    <a target="_blank" href="index.php" class="mt-3 d-flex">CITPICS</a>
                    <h1>Upload a photo for the world to see!</h1>
                    <form method="POST" action='<?=$_SERVER['PHP_SELF'];?>' enctype='multipart/form-data'>
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName" placeholder="Enter the title of your post" required="required">
                                <div class="form-group">
                                  <form accept-charset="UTF-8" action="https://getform.io/f/{your-form-endpoint-goes-here}" method="POST"  target="_blank">
                                    <label>Caption</label>
                                 <input type="text" name="caption" class="form-control" id="exampleInputName" placeholder="Enter the Caption of your post" required="required">
                            </div>
                        <hr>
                        <div class="form-group mt-3">
                            <label class="mr-2">Upload your Photo:</label>
                            <input type="file" id="fileimg" name="fileimg" required="required">
                        </div>
                        <div class='row'>
                            <div id='photo_upload_error'class='col-md-6 offset-md-3 mt-5'>
                        <?
                            if($error)
                            {
                               echo($error);
                            }
                            if($success) 
                            {
                                echo("<h1>Uploaded Successfully</h1>");
                            }
                        ?>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" name='submit' class="btn btn-primary">Upload</button>
                    </form>
                    </div>
                </div> <!-- End of Container Div-->
            </div> 
            <!-- end of photo upload -->
        </section>
        <!-- End post Area -->  
    </div>
    <!-- End post Area -->
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <?
        require_once("footer.php");
    ?>