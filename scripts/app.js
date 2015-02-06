angular
.module('dashboard',[
	'ngRoute',
	'ui.router',
	'ngProgress'
	])
.config(['$stateProvider','$urlRouterProvider',function($stateProvider,$urlRouterProvider){

	$urlRouterProvider.otherwise('/');

	$stateProvider
	.state('Dashboard',{
		url: '/',		
		abstract: true,
		views:{
			'main':{
				templateUrl: 'dashboard/dashboard_view'
			},
			'navbar':{
				templateUrl: 'dashboard/navbar',				
				controller: navbar_Ctrl		
			},
			'head':{
				templateUrl: 'dashboard/head_template',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			},
			'filter':{
				templateUrl: 'dashboard/filter',
				controller: "dashboardCtrl"
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
		templateUrl: 'dashboard/tests'
	})
	.state('Dashboard.tat',{
		url: 'tat',
		templateUrl: 'dashboard/tat'
	})
	.state('Dashboard.facilitiesTests',{
		url: 'facilitiesTests',
		templateUrl: 'dashboard/facilitiesTests'
	})
	.state('Dashboard.labPerformance',{
		url: 'labPerformance',
		templateUrl: 'dashboard/labPerformance'
	})
	.state('Dashboard.TBCoinf',{
		url: 'TBCoinf',
		templateUrl: 'dashboard/TBCoinf'
	})
	.state('Dashboard.VLSuppression',{
		url: 'VLSuppression',
		templateUrl: 'dashboard/VLSuppression'
	})
	.state('Dashboard.SampleType',{
		url: 'SampleType',
		templateUrl: 'dashboard/SampleType'
	})
	.state('Dashboard.BF',{
		url: 'BF',
		templateUrl: 'dashboard/BF'
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
				controller: navbar_Ctrl
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
				templateUrl: 'dashboard/navbar',
				controller: navbar_Ctrl
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


var navbar_Ctrl	=	['$scope','$location', function($scope,$location){

	$scope.getClass = function(path) {
		// alert($location.path() +"-"+ path);
		if ($location.path() == path) {
			return "active"
		} else {
			return ""
		}
	}

}]