app.controller('dashboardCtrl',['$scope','$timeout','ngProgress', 'Filters','Commons',function($scope,$timeout,ngProgress,Filters,Commons){

	// ngProgress.color('#cfba13');
	ngProgress.start();
	$timeout(ngProgress.complete(), 100000);

	$scope.showMe =3;
	$scope.filters 	={};
	$scope.filters.programs 	={};

	$scope.visible = 	function(page){

		if((page=="tests" || page=="tat" || page=="facilitiesTests" || page=="labPerformance"|| page=="SampleType" ||page=="BF") && (typeof Filters.programs.selected != 'undefined') && Filters.programs.selected.initials=="EID"){
			return true;
		}
		else if((page=="tests" || page=="tat" || page=="facilitiesTests" || page=="labPerformance"|| page=="TBCoinf"|| page=="VLSuppression"|| page=="SampleType") && (typeof Filters.programs.selected != 'undefined') && Filters.programs.selected.initials=="VL"){
			return true;
		}
		else if((page=="tests" || page=="tat" || page=="facilitiesTests" || page=="labPerformance"||  page=="SampleType")){
			return true;
		}
		else{
			return false
		}
	}

	$scope.filters.programs.selected = function(){
		return Filters.programs.selected;
	}
	$scope.getActiveClass = Commons.getActiveClass;
	$scope.getSpecActiveClass = Commons.getSpecActiveClass;
}])