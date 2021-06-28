var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home.html"
    })
    .when("/about", {
        templateUrl : "about.html"
    })
    .when("/services", {
        templateUrl : "services.html"
    })
    .when("/clinets", {
        templateUrl : "clinets.html"
    })
    .when("/careers", {
        templateUrl : "careers.html"
    })
    .when("/contact", {
        templateUrl : "contact.html"
    });
});