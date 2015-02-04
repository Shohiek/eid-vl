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
		views:{
			'main':{
				templateUrl: 'dashboard/dashboard_view',
				controller: ['$scope', function($scope){
					$scope.home= "dd"
				}]
			},
			'navbar':{
				templateUrl: 'dashboard/navbar',
				controller: ['$scope', function($scope){
				}]
			},
			'head':{
				templateUrl: 'dashboard/head_template',
				controller: ['$scope', function($scope){
					$scope.title= "EID/Viral Load Dashboard"
				}]
			},
			'filter':{
				templateUrl: 'dashboard/filter',
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
				controller: ['$scope', function($scope){
				}]
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
				controller: ngProgress_Test
			},
			'navbar':{
				templateUrl: 'dashboard/navbar',
				controller: ['$scope', function($scope){
				}]
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
}]);


var ngProgress_Test = ['$scope','$timeout','ngProgress',function($scope, $timeout, ngProgress) {

	ngProgress.start();
	$timeout(ngProgress.complete(), 100000);
}]