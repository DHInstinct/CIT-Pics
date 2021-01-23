<?
    require_once("header.php");
    require_once("config.php");
    
     if($_SESSION['admin'] == 0)
         header("location:feed.php");

 ?>

<br />
<br />
<br />
<br />
<br />
<br />
<link
  rel="stylesheet"
  type="text/css"
  href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
/>
<hr />
<div class="container bootstrap snippet">
  <div class="row">
    <div class="col-lg-12">
      <div class="main-box no-header clearfix">
        <div class="main-box-body clearfix">
          <div class="table-responsive">
          <h3> Welcome Admin (super secret stuff goes on here :D ) </h3>
          <table class='table'>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>email</th>
          <tbody id='loadusers'></tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?
    require_once("footer.php")
?>
