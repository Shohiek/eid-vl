app.factory('Filters',['$http', function($http){

	var filters = {};
	filters.getEntities = function(){
		return $http.get('api/filters/entities').then(function(response){
			return response.data;
		});
	};
	filters.getPrograms = function(){
		return $http.get('api/filters/programs').then(function(response){
			return response.data;
		});
	};

	filters.getDates = function(){
		return $http.get('api/filters/dates').then(function(response){
			return response.data;
		});
	};

	filters.entities 	= getEntities();
	filters.programs 	= getPrograms();
	filters.dates 		= getDates();

	filters.entities.selected = undefined;
	filters.programs.selected = undefined;

	return filters;

}]);