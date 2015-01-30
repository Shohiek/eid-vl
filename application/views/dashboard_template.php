<!DOCTYPE html>
<html ng-app="dashboard">

  <head>
    
  </head>

  <body>
    <div class="container" >
      <header ng-include="'<?php //echo base_url('');?>'"></header>
      <div ui-view="head"></div>
      <div ui-view="main"></div>
      <!-- <footer ng-include="'<?php //echo base_url('');?>'"></footer> -->
    </div>
  </body>


  
  <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bower_components/angular/angular.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bower_components/angular-route/angular-route.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bower_components/angular-ui-router/release/angular-ui-router.min.js');?>"></script>

  <script src="<?php echo base_url('scripts/app.js');?>"></script>
</html>