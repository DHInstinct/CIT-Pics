<?
	require_once("header.php");
	require_once("config.php");

	if(empty($_SESSION['userloggedin']))
    {
      header('location:index.php');
    }

	$picture = $_GET['picture'];


?>
<br />
<br />
<br />
<br />


<!-- Start Align Area -->
<div class="whole-wrap pb-100">
	<div class="container">
		<!-- Start of recent posts -->
		<div class="single_widget recent_widget">
<br />
<br />
<br />

	<div class="text-center">
	  <div class="item viewphoto">
		<a target="blank" href="img/CITPICS_Logo.png">
		  <img src="img/CITPICS_Logo75px.png" alt="" />
		</a>
		<p class="mt-20 title text-uppercase"><br /></p>
		<p>
		  02 Hours ago
		  <span>
			<i class="fa fa-heart-o" aria-hidden="true"></i> 06
			<i class="fa fa-comment-o" aria-hidden="true"></i>02</span
		  >
		</p>
		<div class="form-group">
			<label for="comment">Comment:</label>
			<textarea class="form-control" rows="2" id="comment"></textarea>
			<input class="btn btn-primary" type="submit" value="Submit">
		  </div>
	  </div>
  </div>
  <!-- end of recent posts area -->
</div>
<!-- end of container div -->
 </div>
 <!-- end of whole wrap div -->
 <?
 require_once("footer.php");
?>