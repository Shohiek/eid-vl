<style>
	h1{
		padding:0px;
	}	
	h3{
		padding:0px;
	}
</style>

<div class="row">
	<center>
		<h1>{{Title}}</h1>
		<img src="<?php echo base_url('assets/images/tz.png'); ?>" style="width 100px; height: 100px;" /><br/>
		<h3>{{application}}</h3>
	</center>
	
	<div class="col-md-2 col-md-offset-5" id="form-container">
		<form ng-submit="onSubmit()">
	        <formly-form model="formData" fields="formFields">
	          <button type="submit" class="btn btn-primary submit-button">Login</button>
	        </formly-form>
      	</form>
	</div>
</div>