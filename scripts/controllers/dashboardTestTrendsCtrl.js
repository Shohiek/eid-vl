app.controller('dashboardTestTrendsCtrl',['$scope', 'Filters',function($scope,Filters){
	$scope.heading = "Testing Trends"
	$scope.labels = ['2006', '2007', '2008', '2009', '2010', '2011', '2012'];
	$scope.series = ['Series A', 'Series B'];
	$scope.type="bar"

	$scope.data = [
	[65, 59, 80, 81, 56, 55, 40],
	[28, 48, 40, 19, 86, 27, 90]
	];

	$scope.test = function (){

		$scope.data[0][1]=$scope.data[0][1]+30;		
		$scope.type="line"
	}
}])
