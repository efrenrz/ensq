


var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("/estados")
        .success(function (response) {$scope.states = response.estados;});

    $scope.getMunicipios = function(){
        var stateId =  $scope.selected_state;
        $scope.municipios = null;

        var optionsMunicipios = $http.get("/municipios/" + stateId.id)
            .success(function (response) {$scope.municipios = response.municipios;});

    }

});

