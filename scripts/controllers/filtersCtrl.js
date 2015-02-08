angular
.module('dashboard')
.controller('filtersCtrl',['$scope','$http',function($scope,$http){
	$scope.address = {};
	$scope.refreshAddresses = function(address) {
		var params = {address: address, sensor: false};
		return $http.get(
			'http://maps.googleapis.com/maps/api/geocode/json',
			{params: params}
			).then(function(response) {
				$scope.addresses = response.data.results
			});
		};
		$scope.clear = function() {
			$scope.person.selected = undefined;
			$scope.address.selected = undefined;
			$scope.country.selected = undefined;
		};
		$scope.filterentities = [
		{ name: 'Iringa',      						      		phone:'1234567'		, type: 'Region' },
		{ name: 'Ruvuma',    	email: 'ruvuma@email.com',    	phone:'1234567'		, type: 'Region' },
		{ name: 'CSSC', 		email: 'cssc@email.com', 		phone:'1234567'		, type: 'Implementing Partner' },
		{ name: 'Walter Reed',	email: 'adrian@email.com',    	phone:'1234567'		, type: 'Implementing Partner' },
		{ name: 'Arumeru',  	email: 'arumeru@email.com',  	phone:'1234567'		, type: 'District' },
		{ name: 'Kilolo',  	email: 'Kilolo@email.com',  	phone:'1234567'		, type: 'District' },
		{ name: 'Idodo',  		email: 'Idodo@email.com',  		phone:'1234567'		, type: 'Facility' },
		{ name: 'Mafinga',    email: 'Mafinga@email.com',    phone:'1234567'		, type: 'District' },
		{ name: 'Mbeya District Hospital',   email: 'natasha@email.com',   phone:'1234567'		, type: 'HPV Lab' },
		{ name: 'Ruvuma Hospital',   email: 'natasha@email.com',   phone:'1234567'		, type: 'HPV Lab' },
		{ name: 'Mgololo',  		email: 'Mgololo@email.com',  		phone:'1234567'		, type: 'Facility' }
		];
	}])
.filter('propsFilter', function() {
  return function(items, props) {
    var out = [];

    if (angular.isArray(items)) {
      items.forEach(function(item) {
        var itemMatches = false;

        var keys = Object.keys(props);
        for (var i = 0; i < keys.length; i++) {
          var prop = keys[i];
          var text = props[prop].toLowerCase();
          if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
            itemMatches = true;
            break;
          }
        }

        if (itemMatches) {
          out.push(item);
        }
      });
    } else {
      // Let the output be the input untouched
      out = items;
    }

    return out;
  };
});
