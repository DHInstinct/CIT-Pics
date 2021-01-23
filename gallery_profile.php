<?
       require_once("header.php");

       if(empty($_SESSION['userloggedin']))
       {
         header('location:index.php');
       }

       
?>

    <!-- Start top-section Area -->
    <section class="top-section-area section-gap">
      <div class="container">
        <div class="row justify-content-between align-items-center d-flex">
          
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End top-section Area -->

    <!-- Start of Profile -->
    <div class="single_widget about_widget">
      <h2 class="text-uppercase"><? echo($_SESSION['userloggedin']." " .$_SESSION['lastname'] );?></h2>
    </div>
    <!-- End of Profile -->

    <div class="whole-wrap pb-100">
      <div class="container">
        <!-- Start of image gallery -->
        <div class="section-top-border">
          <h3 class='text-center'>Image Gallery</h3>
              <div class='row gallery-item' id='photodump'> </div> 
          <!-- <div class='row gallery-item'>
            <div class='col-md-4'>
              <a href='viewphoto.php'>
                <div
                  class='single-gallery-image'
                ></div></a>
            </div>
            <div class="col-md-4">
              <a href="viewphoto.php">
                <div
                  class="single-gallery-image"
                  style="background: url(img/elements/g2.jpg);"
                ></div
              ></a>
            </div>
            <div class="col-md-4">
              <a href="viewphoto.php">
                <div
                  class="single-gallery-image"
                  style="background: url(img/elements/g3.jpg);"
                ></div
              ></a>
            </div>
            <div class="col-md-6">
              <a href="veiwphoto.php"
                ><div
                  class="single-gallery-image"
                  style="background: url(img/elements/g4.jpg);"
                ></div
              ></a>
            </div>
            <div class="col-md-6">
              <a href="viewphoto.php">
                >
                <div
                  class="single-gallery-image"
                  style="background: url(img/elements/g5.jpg);"
                ></div
              ></a>
            </div>
            <div class="col-md-4">
              <a href="viewphoto.php">
                >
                <div
                  class="single-gallery-image"
                  style="background: url(img/elements/g6.jpg);"
                ></div
              ></a>
            </div>
            <div class="col-md-4">
              <a href="viewphoto.php">
                >
                <div
                  class="single-gallery-image"
                  style="background: url(img/elements/g7.jpg);"
                ></div
              ></a>
            </div>
            <div class="col-md-4">
              <a href="viewphoto.php">
                >
                <div
                  class="single-gallery-image"
                  style="background: url(img/elements/g8.jpg);"
                ></div
              ></a>
            </div>
          </div>
        </div> -->
        <!-- End of image gallery -->
      </div>
      <!-- end of container div -->
    </div>
    <!-- end of whole wrap div -->

    <?
       require_once("footer.php");
?>