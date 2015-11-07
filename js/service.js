var alquimia = angular.module('alquimia', ['ui.router']);
alquimia.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view1', {templateUrl: 'partials/partial1.html', controller: 'MyCtrl1'});
  $routeProvider.when('/view2', {templateUrl: 'partials/partial2.html', controller: 'MyCtrl2'});
  $routeProvider.otherwise({redirectTo: '/view1'});
}]);
alquimia.config(function($stateProvider, $urlRouterProvider) {
  // For any unmatched url, redirect to /state1
  $urlRouterProvider.otherwise("/home");
  // Now set up the states
  $stateProvider
    .state('home', {
      url: "/home",
      templateUrl: "views/principal.html"
    })
    .state('contato', {
      url: "/contato",
      templateUrl: "views/contato.php"
    })
    .state('sobre', {
      url: '/sobre',
      templateUrl: "views/sobre.html"
    })
});
