app.controller('loginCtrl',['$scope',function ($scope){
		var vm = this;

		vm.formData = {};
		  
    // funcation assignment
    $scope.onSubmit = onSubmit;

    
    $scope.Title = 'United Republic of Tanzania';
    $scope.application = 'Early Infant Diagnosis';
    
    vm.formFields = [
       {
        key: 'text',
        type: 'input',
        templateOptions: {
          label: 'Username',
          placeholder: 'username',
          required: true
        }
      },
      {
        key: 'password',
        type: 'input',
        templateOptions: {
        	type: 'password',
          	label: 'Password',
          	placeholder: 'password',
          	required: true
        }
      }]

    // function definition
    function onSubmit() {
      alert(JSON.stringify($scope.formData), null, 2);
    }
}])
