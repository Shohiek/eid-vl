app.controller('dashboardCtrl',['$scope','$timeout','ngProgress',function($scope,$timeout,ngProgress){

	// ngProgress.color('#cfba13');
	ngProgress.start();
	$timeout(ngProgress.complete(), 100000);

	$scope.showMe =3;

}])
