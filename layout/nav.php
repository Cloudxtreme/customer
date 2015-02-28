<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/customer/">Nageby Internettjänster AB</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li <?php echo $page->active('index'); ?>><a href="/customer/">Hem</a></li>
          <li <?php echo $page->active('services'); ?>><a href="/customer/services">Tjänster</a></li>
          <li <?php echo $page->active('support'); ?>><a href="/customer/support">Support</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown <?php echo $page->active('user'); ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user fa-fw"></i>
              <?php
              if (isset($_SESSION['username'])) {
                echo ucwords($_SESSION['name']);
              }
              ?>
               <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/customer/billing"><i class="fa fa-credit-card"></i> Betalning</a></li>
              <li><a href="/customer/logs"><i class="fa fa-file-archive-o"></i> Loggar</a></li>
              <li><a href="/customer/settings"><i class="fa fa-cog"></i> Inställningar</a></li>
              <li class="divider"></li>
              <li><a href="/customer/scripts/logout" onclick="return confirm('Logga ut?');">Logga ut</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>