function StaffCtrl($scope) {
	$scope.items = [{name:'Bob', alive:true}, {name:'Joe', alive: true}];

	$scope.addPerson = function() {
		$scope.items.push({name: $scope.itemText, visible: true});
		$scope.itemText = '';
	}


}

