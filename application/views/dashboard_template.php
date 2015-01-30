<!DOCTYPE html>
<html ng-app="dashboard">

<head ui-view="head">    

</head>

<body>
  <div class="container" >
    <div ui-view="navbar" class="container"></div>
    <ol ui-view="filter" class="navbar">

    </ol>
    <div ui-view="main"></div>
  </div>
  <div ui-view="footer"></div>


</body>



<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular/angular.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-route/angular-route.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-ui-router/release/angular-ui-router.min.js');?>"></script>

<script src="<?php echo base_url('scripts/app.js');?>"></script>
</html>