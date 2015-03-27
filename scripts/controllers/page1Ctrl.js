app.controller('page1Ctrl',['$scope','Commons',function ($scope,Commons){
		var vm = this;

		vm.formData = {};
		  
    // funcation assignment
    $scope.onSubmit = onSubmit;

    
    $scope.Title = 'United Republic of Tanzania';
    $scope.application = 'Early Infant Diagnosis/Viral Load';
    $scope.pageTitle = 'EID/VL Login';
}])

