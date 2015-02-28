<?php
require 'scripts/autoloader.php';
$page = new navigation('support');
require 'layout/autoloader.php';
?>
<?php
     $id = $_GET['id'];
     $q = mysqli_query($con, "SELECT * FROM support where id ='$id';");
     while ($r = mysqli_fetch_array($q)) {
      if (isset($r['a'])) {
          header("Location: $_SERVER[HTTP_REFERER]");
      }
?>
<div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Svara på fråga nr: <?php echo $_GET['id']; ?></h3>
        </div>
        <div class="panel-body">
        	<h4>
        		<i><?php echo $r['q']; ?></i>
        	</h4>
          <form action="do/answer.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <textarea id="a" name="a" maxlength="160" placeholder="Svara på frågan här" class="form-control"></textarea>
              <input type="submit" class="btn btn-primary" value="Svara">
          </form>
        </div>
      </div>
    </div>

  </div>

<?php
}
require 'layout/footer.php';
?>
