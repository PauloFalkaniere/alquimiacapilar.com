angular.module('alquimia.principalController', [])
.controller('principalController', ['$scope', '$http', function($scope, $http){
  $http.get('model/array_produtos.json')
   .then(function(data){
      $scope.products = data.data;
    });
}]);
