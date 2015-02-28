<?php
require 'scripts/autoloader.php';
$page = new navigation('user');
require 'layout/autoloader.php';
?>
<?php
     $id = $_GET['id'];
     $q = mysqli_query($con, "SELECT * FROM users where id ='$user';");
     while ($r = mysqli_fetch_array($q)) {
?>

<div class="container">
  <div class="row">

    <div class="col-md-10">
    	<div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Inställningar</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Telefonnummer</label>
            <input type="text" class="form-control" id="inputDefault" value="<?php echo $r['cellphone']; ?>">
          </div>

           <div class="form-group">
            <label class="control-label" for="inputDefault">Email-adress</label>
            <input type="email" class="form-control" id="inputDefault" value="<?php echo $r['email']; ?>">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <blockquote>
  			<p>Det man kan tänka och tro kan man också åstadkomma.</p>
  			<small>Napoleon Hill<cite title="Source Title">Think and Grow Rich</cite></small>
		</blockquote>
    </div>

  </div>
</div>

<?php
}
require 'layout/footer.php';
?>