<h4 id="btn-groups" class="page-header">{{ heading }}</h4>

<div class="row">						
	<div class="col-md-6">

		<div class="panel panel-default bootcards-table">

			<div class="panel-heading">
				<h3 class="panel-title">Monthly Testing Trends</h3>      
			</div> 

			<div style="">
				<canvas id="line" class="chart chart-bar" data="data" labels="labels" legend="true" series="series"click="onClick">
				</canvas> 

			</div>

			<div class="panel-footer">
				<button ng-click="test()" class="btn btn-info btn-block">
					<i class="fa fa-bar-chart-o"></i>
					Show Chart
				</button>
			</div>

			<div class="panel-footer">
			</div>  

		</div>


	</div>	

	<div class="col-md-6">

		<div class="panel panel-default bootcards-table">

			<div class="panel-heading">
				<h3 class="panel-title">Monthly Testing Trends</h3>      
			</div> 

			<div style=""> 
				<canvas id="line" class="chart chart-line" data="data" labels="labels" legend="true" series="series"click="onClick">
				</canvas> 
			</div>

			<div class="panel-footer">
				<button class="btn btn-info btn-block">
					<i class="fa fa-bar-chart-o"></i>
					Show Chart
				</button>
			</div>

			<div class="panel-footer">
			</div>  

		</div>

	</div>
</div>