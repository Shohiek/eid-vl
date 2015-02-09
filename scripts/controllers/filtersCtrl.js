app.controller('filtersCtrl',['$scope','$http',function($scope,$http){

	$scope.address = {};
	$scope.filters = {};


	$scope.filters.clear = function() {
		$scope.filters.entities.selected = undefined;
		$scope.filters.programs.selected = undefined;
	};

	$scope.filters.programs = 
	[
	{ name: 'Viral Load', 				initials:'VL' },
	{ name: 'Early Infant Diagnosis', 	initials:'EID' },
	];

	$scope.filters.entities = 
	[
	{ name: 'Iringa',      						      					phone:'1234567'		, type: 'Regions' },
	{ name: 'Ruvuma',    				email: 'ruvuma@email.com',    	phone:'1234567'		, type: 'Regions' },
	{ name: 'CSSC', 					email: 'cssc@email.com', 		phone:'1234567'		, type: 'Implementing Partners' },
	{ name: 'Walter Reed',				email: 'adrian@email.com',    	phone:'1234567'		, type: 'Implementing Partners' },
	{ name: 'Arumeru',  				email: 'arumeru@email.com',  	phone:'1234567'		, type: 'Districts' },
	{ name: 'Kilolo',  					email: 'Kilolo@email.com',  	phone:'1234567'		, type: 'Districts' },
	{ name: 'Idodo',  					email: 'Idodo@email.com',  		phone:'1234567'		, type: 'Facilities' },
	{ name: 'Mafinga',    				email: 'Mafinga@email.com',    	phone:'1234567'		, type: 'Districts' },
	{ name: 'Mbeya District Hospital', 	email: 'natasha@email.com',   	phone:'1234567'		, type: 'HPV Labs' },
	{ name: 'Ruvuma Hospital',   		email: 'natasha@email.com',   	phone:'1234567'		, type: 'HPV Labs' },
	{ name: 'Mgololo',  				email: 'Mgololo@email.com',  	phone:'1234567'		, type: 'Facilities' }
	];

	$scope.filters.programs.selected = 		{ name: 'Viral Load', 				initials:'VL' };

	$scope.filters.startDate = moment().startOf('year').format('YYYY-MM-D');
	$scope.filters.endDate = moment().format('YYYY-MM-D');
}])
.filter('entityFilter', function() {
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
