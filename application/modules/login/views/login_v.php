<style>
	h1{
		padding:0px;
	}	
	h3{
		padding:0px;
	}
	body{
		background-color:#F2F1EF;
	}
	#form-container{
	background-color:#556676;/*#C5EFF7*/
		color:#fff;
		padding:1%;
		-moz-border-radius: 5%;
		-webkit-border-radius: 5%;
		border-radius: 5%; 
		-khtml-border-radius: 5%; 
	}
	#loginfm{
	background-color:#3398CC;/*#E4F1FE*/
		padding:2%;
		-moz-border-radius: 2%;
		-webkit-border-radius: 2%;
		border-radius: 2%; 
		-khtml-border-radius: 2%; 
	}
	input.ng-invalid.ng-dirty{
		border:1px solid red;
	}
</style>

<div class="row">
	<div class="col-md-4 col-md-offset-4" id="form-container">
		<center>
			<h1>{{Title}}</h1>
			<img src="<?php echo base_url('assets/images/tz.png'); ?>" style="width 100px; height: 100px;" /><br/>
			<h3>{{application}}</h3>
		</center>
		
		<div id="alerts" style="background-color: #1BBC9B; width: 100%; text-align: center;"><p></p></div>
		
		<form ng-submit="onLogin()" name="login_fm" id="loginfm">
			<div class="form-group">
				<label>
					Username
				</label>
				<input type="text" ng-model='user.username' class="form-control" id="username" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label>
					Password
				</label>
				<input type="password" ng-model="user.password" class="form-control" id="password" name="password" placeholder="Password" required  ng-minlength = "5">
				<!-- <span ng-show="login_fm.password.$dirty && login_fm.password.$error.minlength">Too short</span> -->
			</div>
			<center>
				<input type="submit" ng-disabled="login_fm.$invalid" class="btn btn-info" value="Login">
			</center>
		</form>
	</div>
</div>