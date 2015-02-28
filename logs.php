<?php
require 'scripts/autoloader.php';
$page = new navigation('user');
require 'layout/autoloader.php';
?>
<div class="container">
  <div class="row">

    <div class="col-md-10">
    	<div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Loggar</h3>
        </div>
        <div class="panel-body">
          <ul class="list-group">
  				  <li class="list-group-item">
    				  <span class="badge">15</span>
    				  Antal mail skickade
  				  </li>
  				  <li class="list-group-item">
    				  <span class="badge">153</span>
    				  Antal filer
  				  </li>
  				  <li class="list-group-item">
    				  <span class="badge">3</span>
   					  Antal användare
  				  </li>
			   </ul>
        </div>
      </div>
    </div>
    <div class="col-md-2">
    </div>

  </div>
</div>

<?php
require 'layout/footer.php';
?>