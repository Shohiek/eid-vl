<!DOCTYPE html>
<html ng-app="dashboard">

<head ui-view="head">    

</head>

<body>
  <div class="container main" >
    <div ui-view="navbar" class="container"></div>

    <div ui-view="filter" class="container-fluid"></div>

    <div ui-view="main"></div>

  </div>
  <div ui-view="footer"></div>
</body>
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/semantic-ui/build/packaged/javascript/semantic.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular/angular.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/moment/moment.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-route/angular-route.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-ui-router/release/angular-ui-router.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/ngprogress/build/ngprogress.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-ui-select/dist/select.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-sanitize/angular-sanitize.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-daterangepicker/js/angular-daterangepicker.min.js');?>"></script>


<script src="<?php echo base_url('scripts/app.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/dashboardCtrl.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/filtersCtrl.js');?>"></script>
</html>