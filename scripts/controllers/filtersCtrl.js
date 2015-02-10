app.controller('filtersCtrl',['$scope','$location', 'Filters', function($scope,$location,Filters){

	Filters.programs= {};
	Filters.entities= {};
	Filters.dates= {}; 				//all these needs to be put in a provider

	$scope.filters = {};

	$scope.filters.entities = [{ name: '', email:'',phone:'', type: '' }];

	getEntities();


	function getEntities() {
		Filters.getEntities()
		.success(function (ents) {
			$scope.filters.entities = ents;
		})
		.error(function (error) {
			$scope.status = 'Unable to load Filters data: ' + error.message;
		});
	}

	$scope.filters.clear = function() {
		$scope.filters.entities.selected = undefined;
		$scope.filters.programs.selected = undefined;

		Filters.entities.selected = undefined;
		Filters.programs.selected = undefined;
	};

	$scope.filters.programs = 
	[
	{ name: 'Viral Load', 				initials:'VL' },
	{ name: 'Early Infant Diagnosis', 	initials:'EID' },
	];

	$scope.bindProgramSelected= function (){
		Filters.programs.selected =$scope.filters.programs.selected 
		 $location.path( Filters.programs.selected.initials );
	}
	

	$scope.filters.programs.selected = 	Filters.programs.selected =	{ name: 'Viral Load', 				initials:'VL' };

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
})