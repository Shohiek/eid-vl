angular
	.module('dashboard',[
		'ngRoute','ui.router'
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
								$scope.home= "ddd";
							}]
						},
						'head':{
							templateUrl: 'dashboard/head_template',
							controller: ['$scope', function($scope){
								$scope.home= "ddd";
							}]
						}
					}
				})
	}])