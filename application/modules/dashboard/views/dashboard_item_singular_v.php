<h4 id="btn-groups" class="page-header">{{ heading }}</h4>

<div class="row">						
	<div class="col-md-12">

		<div class="panel panel-default bootcards-table">

			<div class="panel-heading">
				<h3 class="panel-title">Monthly Testing Trends</h3>      
			</div> 

			<div style=""> 

				<div class="span12">
					<input ng-model="chartConfig.title.text">
					<button ng-click="addSeries()">Add Series</button>
					<button ng-click="addPoints()">Add Points to Random Series</button>
					<button ng-click="removeRandomSeries()">Remove Random Series</button>
					<button ng-click="swapChartType()">Line/Bar</button>
					<button ng-click="toggleLoading()">Loading?</button>
					<button ng-click="test()">My test</button>
				</div>
				<div class="row">
					<highchart id="chart1" config="chartConfig" class="span10"></highchart>
				</div>
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

</div>