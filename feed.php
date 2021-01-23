<?
       require_once("header.php");

       if(empty($_SESSION['userloggedin']))
       {
         header('location:index.php');
       }
?>


<!-- Start post photos Area -->
<section class="travel-area section-gap" id="travel">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10"> Post Photos</h1>
              <p>
                Here will be the trending post/ regualar post area, all posts are found here. Treading will pop up first
              </p>
            </div>
          </div>
        </div>
        <div id='photodump' class='row'></div>
    </section>
    <!-- End trending Area -->


<?
    require_once("footer.php");
?>
