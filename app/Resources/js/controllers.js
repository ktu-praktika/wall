

angular.module('cars.controllers', []).
    controller('vendor', ['$scope', '$http' ,function($scope, $http) {
        $scope.show = function(url) {
            $http.get(url).success(function(data){
                $scope.vendor = data;
            });
        };
    }]);