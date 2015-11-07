var alquimia = angular.module('alquimia', ['ui.router']);
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
      templateUrl: "views/contato.html",
      controller: 'contatoController'
    })
    .state('sobre', {
      url: '/sobre',
      templateUrl: "views/sobre.html"
    })
});
