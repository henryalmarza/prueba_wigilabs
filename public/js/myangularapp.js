var miAplicacion = angular.module('miApp', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

    miAplicacion.controller('miControlador', function($scope, $http) {
    	$http.get('http://localhost:8000/articulos').
    	then(function(response) {
    		$scope.articulo = response.data;
    	});

    	$http.get('http://localhost:8000/soap').
    	then(function(response) {
    		$scope.soap = response.data;
    	});
    });