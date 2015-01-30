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
	}])