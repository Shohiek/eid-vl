var app = angular
.module('dashboard',[
	'ngRoute',
	'ui.router',
	'ngProgress',
	'ngSanitize', 
	'ui.select',
	'daterangepicker'
	])
.config(['$stateProvider','$urlRouterProvider',function($stateProvider,$urlRouterProvider){

	$urlRouterProvider.otherwise('/');

	$stateProvider
	.state('Dashboard',{
		url: '/',		
		abstract: true,
		views:{
			'main':{
				templateUrl: 'dashboard/dashboard_view',
				controller:'dashboardCtrl'
			},
			'navbar':{
				templateUrl: 'dashboard/navbar'	
			},
			'head':{
				templateUrl: 'dashboard/head_template',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			},
			'filter':{
				templateUrl: 'dashboard/filter',
				controller: "filtersCtrl"
			},
			'footer':{
				templateUrl: 'dashboard/footer',
				controller: ['$scope', function($scope){
				}]
			}
		}
	})

	.state('Dashboard.tests',{
		url: '',
		templateUrl: 'dashboard/dashboard_item'
	})

	.state('Dashboard.VLtests',{
		url: 'VL/tests',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.VLtat',{
		url: 'VL/tat',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.VLfacilitiesTests',{
		url: 'VL/facilitiesTests',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.VLlabPerformance',{
		url: 'VL/labPerformance',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.VLTBCoinf',{
		url: 'VL/TBCoinf',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.VLVLSuppression',{
		url: 'VL/VLSuppression',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.VLSampleType',{
		url: 'VL/SampleType',
		templateUrl: 'dashboard/dashboard_item'
	})


	.state('Dashboard.EIDtests',{
		url: 'EID/tests',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.EIDtat',{
		url: 'EID/tat',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.EIDfacilitiesTests',{
		url: 'EID/facilitiesTests',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.EIDlabPerformance',{
		url: 'EID/labPerformance',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.EIDSampleType',{
		url: 'EID/SampleType',
		templateUrl: 'dashboard/dashboard_item'
	})
	.state('Dashboard.EIDBF',{
		url: 'EID/BF',
		templateUrl: 'dashboard/dashboard_item'
	})

	.state('lab',{
		url: '/lab',
		views:{
			'main':{
				templateUrl: 'lab/lab_view',
				controller: ['$scope', function($scope){
					$scope.home= "dd"
				}]
			},
			'navbar':{
				templateUrl: 'dashboard/navbar',
			},
			'head':{
				templateUrl: 'dashboard/head_template',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			},
			'footer':{
				templateUrl: 'dashboard/footer',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			}
		}
	})
	.state('facilities',{
		url: '/facilities',
		views:{
			'main':{
				templateUrl: 'facilities/facilities_view',
				// controller: ngProgress_Test
			},
			'navbar':{
				templateUrl: 'dashboard/navbar'
			},
			'head':{
				templateUrl: 'dashboard/head_template',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			},
			'footer':{
				templateUrl: 'dashboard/footer',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			}
		}
	})

	.state('test', {
		abstract: true,
		url: '/test',
		views: {
			'main': {
				template:  '<h1>Hello!!!</h1>' +
				'<div ui-view="view1"></div>' +
				'<div ui-view="view2"></div>'
			}
		}
	})
	.state('test.subs', {
		url: '',
		views: {
			'view1@test': {
				template: "Im View1"
			},
			'view2@test': {
				template: "Im View2"
			}
		}
	});
}]);
