<?php
require 'scripts/autoloader.php';
$page = new navigation('support');
require 'layout/autoloader.php';
?>

<div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Ställ en fråga till våran Supportavdelning</h3>
        </div>
        <div class="panel-body">
          <form action="do/support.php" method="POST">
            <textarea id="q" name="q" maxlength="160" placeholder="Skriv din fråga här" class="form-control"></textarea>
              <input type="submit" class="btn btn-primary" value="Fråga">
              <small id="charsleft" data-toggle="tooltip" data-placement="top" title="Någon av våra anställda kommer att meddelas via email">Ingen moderator online</small>
          </form>
        </div>
      </div>
    </div>

  </div>
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Aktiva supportärenden </h3>
        </div>
        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <td>Fråga: </td>
                <td>Senast Modererad av:</td>
                <td>Tid:</td>
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              $q = mysqli_query($con, "SELECT * FROM support where user ='$user';");
              while ($r = mysqli_fetch_array($q)) {
              ?>
              <tr>
                <td><a href="ticket/<?php echo $r['id'];?>/<?php echo md5(urlencode($r['time'])); ?>"><?php echo $r['q'];?></a></td>
                <td><?php if (!empty($r['a'])){echo "Support";}else{echo "Användare";}?></td>
                <td><?php echo $r['time'];?></td>
                <td><?php if (!empty($r['a'])){echo "Stängd";}else{echo "Öppen";}?></td>
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