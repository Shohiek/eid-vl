app.factory('Filters',['$http', function($http){
	var Filters={};
  Filters.getEntities = function () {
    return $http.get('api/filters/entities');
  };

  return Filters;
}]);