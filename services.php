<?php
require 'scripts/autoloader.php';
$page = new navigation('services');
require 'layout/autoloader.php';
?>
<div class="container">
  <div class="row">

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Aktiva Tjänster</h3>
        </div>
        <div class="panel-body">
          <table class="table">
            <tbody>
              <tr>
                <td>Tjänst</td>
                <td>Pris/Månad</td>
                <td>Totalt pris</td>
              </tr>
              <tr>
                <td>Dedikerad Profs</td>
                <td>450 :-</td>
                <td>4500 :-</td>
              </tr>
              <tr>
                <td>DNS</td>
                <td>20 :-</td>
                <td>200 :-</td>
              </tr>
              <tr>
                <td>DDoS Alerts</td>
                <td>Gratis</td>
                <td>0 :-</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Webbhotell status</h3>
        </div>
        <div class="panel-body">
          <table class="table">
            <tbody>

              <tr>
                <td>Ledigt utrymme</td>
                <td>9GB</td>
              </tr>

              <tr>
                <td>Förbrukat utrymme</td>
                <td>1GB</td>
              </tr>

              <tr>
                <td>IP-Adress</td>
                <td>82.100.80.43</td>
              </tr>

              <tr>
                <td>Domännamn</td>
                <td>Nageby.se</td>
              </tr>

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