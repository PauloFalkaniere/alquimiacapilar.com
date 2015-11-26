// var alquimia = angular.module('alquimia', ['ui.router']);
// alquimia.config(function($stateProvider, $urlRouterProvider) {
//   // For any unmatched url, redirect to /state1
//   $urlRouterProvider.otherwise("/home");
//   // Now set up the states
//   $stateProvider
//     .state('home', {
//       url: "/home",
//       templateUrl: "views/principal.html",
//       controller: "principalController"
//     })
//     .state('contato', {
//       url: "/contato",
//       templateUrl: "views/contato.html",
//       controller: 'contatoController'
//     })
//     .state('sobre', {
//       url: '/sobre',
//       templateUrl: "views/sobre.html"
//     })
//     .state('produto/:id', {
//       url: '/produto/:id',
//       templateUrl: "views/product.html",
//       controller: "productController"
//     })
// });


 var alquimia = angular.module('alquimia',['alquimia.principalController', 'ngRoute', 'alquimia.contatoController', 'alquimia.productController']);

 alquimia.config(function($routeProvider){
    $routeProvider
    .when('/', {
        templateUrl: './views/principal.html',
        controller: 'principalController'
    })
    .when('/home', {
        templateUrl: './views/principal.html',
        controller: 'principalController'
    })
    .when('/contato', {
        templateUrl: './views/contato.html',
        controller: 'contatoController'
    })
    .when('/sobre', {
        templateUrl: './views/sobre.html',
    })
    .when('/produto/:id', {
        templateUrl: './views/product.html',
        controller: 'productController'
    })
    .otherwise ({ redirectTo: '/' });
  });
