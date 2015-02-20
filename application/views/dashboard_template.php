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

<!--JS libraries -->
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
<script src="<?php echo base_url('assets/bower_components/moment/moment.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/Chart.js/Chart.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-chart.js/dist/angular-chart.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/highcharts/highcharts.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/highcharts-ng/dist/highcharts-ng.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-formly/dist/formly.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/angular-formly-templates-bootstrap/dist/angular-formly-templates-bootstrap.min.js');?>"></script>



<!--app -->
<script src="<?php echo base_url('scripts/app.js');?>"></script>

<!--Controllers -->
<script src="<?php echo base_url('scripts/controllers/dashboardCtrl.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/dashboardTestTrendsCtrl.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/filtersCtrl.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/navbarCtrl.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/TATCtrl.js');?>"></script>
<script src="<?php echo base_url('scripts/controllers/loginCtrl.js');?>"></script>

<!--Factories, Services and providers -->
<script src="<?php echo base_url('scripts/factories/Filters.js');?>"></script>
<script src="<?php echo base_url('scripts/factories/Commons.js');?>"></script>

</html>