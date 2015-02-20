<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">     
      	<a class="navbar-brand" href="#">EID/VL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-primary navbar-right">
        <li class=" active" title="Todays Date">

          <a data-toggle="dropdown " href="#" class="dropdown-toggle ">
            <center>
              <span class="user-info">
                <i class="fa fa-calendar fa-sm"></i>
                <small><b><?php echo Date("F D Y,")?></b></small>
                <b><?php echo Date("l")?></b>           
              </span>
            </center>
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>