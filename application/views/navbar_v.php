<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">EID/VL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ng-class="getClass('/')"><a href="#Dashboard"><i class="fa fa-dashboard fa-sm"></i> Dashboard (Analytics)<span class="sr-only"></span></a></li>
        <li ng-class="getClass('/lab')"><a href="#lab"><i class="fa fa-flask fa-sm"></i> Laboratories</a></li>
        <li ng-class="getClass('/facilities')"><a href="#facilities"><i class="fa fa-hospital-o fa-sm"></i> Facilities</a></li>
        <!-- <li><a href="#kits">Kits</a></li> -->
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actions <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="dashboard/logout">Logout<i class="fa fa-sign-out fa-sm pull-right"></i></a></li>
            <li><a href="#Help">Help <i class="fa fa-question  fa-sm pull-right"></i></a></li>
            <li><a href="#profile/my_profile">User Profile<i class="fa fa-user fa-sm pull-right"></i> </a></li>
            <li class="divider"></li>
            <li><a href="#about">About<i class="fa fa-info fa-sm pull-right"></i> </a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>