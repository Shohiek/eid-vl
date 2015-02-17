 <head>
	<title>EID-VL | Login</title>
	<script src="<?php echo base_url('assets/bower_components/angular/angular.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
	
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>"
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.theme.css'); ?>"
</head>

<style>
	label{
		text-align: center;
	}
#login_widget	{
		-moz-box-shadow:    3px 3px 5px 6px #ccc;
	  	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  	box-shadow:         3px 3px 5px 6px #ccc;
	}
#change_pass_widget	{
		-moz-box-shadow:    3px 3px 5px 6px #ccc;
	  	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  	box-shadow:         3px 3px 5px 6px #ccc;
	}
#register_widget	{
		-moz-box-shadow:    3px 3px 5px 6px #ccc;
	  	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	  	box-shadow:         3px 3px 5px 6px #ccc;
	}	
#widget-footer{
	padding: 0px; 
	margin-top: 1%;
}	
#left-widget{
	width: 50%;
	float: left; 
	background-color:#CCCC99;
}

.col-md-6{
	border:solid;
}
</style>

<html data-ng-app="">
	<body>
		<div class="container-fluid">
			<div class="row" >
			
			</div>
			
			<div class="row">
				<div class=".col-md-3 .col-md-offset-3" style="width: 30%; margin-top:20%; margin-left: auto; margin-right: auto;">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
				</div>
			</div>
			
			<div class="row" style="position: absolute; left: 40%; right: 40%; bottom: 0%;">
				<?php echo $this->config->item("copyrights") ?>
			</div>
			<div id="copyrights" >
				<!-- <div class="column" style="float: right; width: 30%; margin-top: 10%; margin-right: 8%;" id="login_widget">
					<div class="ui fluid form segment">
						<h3 class="ui header" value="login">Log-in</h3>
						<form action="#" method="post">
							<div class="field">
								<label>Username</label>
								<input placeholder="Username" type="text" value>
							</div>
							<div class="field">
								<label>Password</label>
								<input type="password" placeholder="Password">
							</div>
							<div class="ui blue submit button" style="padding: 2%;">
								Login
							</div>
						</form>
						<center>
							<div id="widget-footer">
								<div id="left-widget">
									<p id="change_pass_l"  style="padding: 0%; margin: 0%; font-size: smaller; cursor: pointer; color: #FF0000;">
										Forgot Password
									</p>
								</div>
							</div>
						</center>
					</div>
				</div> -->
				
				
			</div>
		</div>
	</body>
</html>