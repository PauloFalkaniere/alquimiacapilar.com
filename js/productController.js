angular.module('alquimia.productController', [])
.controller('productController', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams){
  $http.get('model/array_produtos.json')
   .then(function(data){
   		data.data.forEach(function(resource){
   			if(resource.id == $routeParams.id){
      		$scope.product = resource;
   			}
   		})
    });
}]);
