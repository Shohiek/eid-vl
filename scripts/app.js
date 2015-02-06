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
				controller: "dashboardCtrl"
			},
			'footer':{
				templateUrl: 'dashboard/footer',
				controller: ['$scope', function($scope){
				}]
			}
		}
	})
	.state('Dashboard.subs',{
		url: '',
		views:{
			'widget@Dashboard':{
				templateUrl: 'dashboard/db'
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
}])
.run(['$rootScope', '$state', '$stateParams', function ($rootScope,   $state, $stateParams) {
	$rootScope.$state = $state;
	$rootScope.$stateParams = $stateParams;
	$state.transitionTo('test.subs');
}])
.run(['$rootScope', '$state', '$stateParams', function ($rootScope,   $state, $stateParams) {
	$rootScope.$state = $state;
	$rootScope.$stateParams = $stateParams;
	$state.transitionTo('Dashboard.subs');
}]);


var ngProgress_Test = ['$scope','$timeout','ngProgress',function($scope, $timeout, ngProgress) {

	ngProgress.color('#cfba13');
	ngProgress.start();
	$timeout(ngProgress.complete(), 100000);
}]

var navbar_Ctrl	=	['$scope','$location', function($scope,$location){

	$scope.getClass = function(path) {
		if ($location.path() == path) {
			return "active"
		} else {
			return ""
		}
	}

}]