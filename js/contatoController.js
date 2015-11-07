alquimia.controller('contatoController', function($scope, $http) {
    $scope.name = "";
    $scope.email = "";
    $scope.telefone = "";
    $scope.message = "";
    $scope.response = null;
    $scope.sendEmail = function(){
    var data = {
            name: $scope.name,
            email: $scope.email,
            telefone: $scope.telefone,
            message: $scope.message,
          };
      $http.post('contato.php', data).success(function(data){
        $scope.response = true;
      })
      .error(function(){
        $scope.response = false;
      });
    };
  });
