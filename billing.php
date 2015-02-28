<?php
require 'scripts/autoloader.php';
$page = new navigation('user');
require 'layout/autoloader.php';
?>
<div class="container">
  <div class="row">

    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Betalningsmetod</h3>
        </div>
        <div class="panel-body">
          <table class="table">
            <tbody>
              <tr>
                <td>Korttyp</td>
                <td>Namn</td>
                <td>Kortnummer</td>
                <td>Utgångsdatum</td>
                <td>CVC</td>
              </tr>
              <tr>
                <td>MasterCard</td>
                <td>Christian Nageby</td>
                <td>5545 0141 9118 4326</td>
                <td>06-18</td>
                <td>579</td>
                <td><i class="fa fa-times"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Faktureringsadress</h3>
        </div>
        <div class="panel-body">
          <table class="table">
            <tr>
              <td>
                <h4>Skrittvägen 26, 746 39 Bålsta</h4>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
require 'layout/footer.php';
?>