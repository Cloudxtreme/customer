<?php
require 'scripts/autoloader.php';
$page = new navigation('support');
require 'layout/autoloader.php';
?>

<div class="container">
  <div class="row">
    <?php
     $id = $_GET['id'];
     $q = mysqli_query($con, "SELECT * FROM support where id ='$id';");
     while ($r = mysqli_fetch_array($q)) {
      if (empty($r['a'])) {
          header("Location: $_SERVER[HTTP_REFERER]");
      }
              ?>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          
          <h3 class="panel-title">
            Fråga nr: <?php echo $r['id']; ?>
            <span style="float:right;">
              <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Tillbaka</a>
            </span>
          </h3>

        </div>
        <div class="panel-body">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <h5>
                    <b><?php echo $r['q'];?></b>
                  </h5>
                </td>
              </tr>
              <tr>
                <td>
                  <?php echo $r['a'];?><br>
                  <b> Med Vänlig Hälsning från Supportpersonalen</b>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
require 'layout/footer.php';
?>