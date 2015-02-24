app.controller('loginCtrl',['$scope','Commons',function ($scope,Commons){
		var vm = this;

		vm.formData = {};
		  
    // funcation assignment
    $scope.onSubmit = onSubmit;

    
    $scope.Title = 'United Republic of Tanzania';
    $scope.application = 'Early Infant Diagnosis/Viral Load';
    $scope.pageTitle = 'EID/VL Login';
    
    
   	$scope.username = "";
   	$scope.password = "";

    // function definition
    function onSubmit() {
      alert(JSON.stringify($scope.formData), null, 2);
    }
    
    $scope.onLogin = function (){
    	username = $scope.user.username;
    	password = $scope.user.password;
    	
    	var formData = {username:username,password:password};
		
		 $.ajax({
			url:Commons.baseURL+"login/authenticate",
			type: 'POST',
			data:formData,
			success:function(success){
				$("#alerts p").text(success);
			}
		});	
    }
}])

