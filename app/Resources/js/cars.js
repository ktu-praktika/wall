

angular.module('cars.controllers', []).
    controller('cars', ['$scope', '$http' ,function($scope, $http) {

        $scope.test = 'Go dude!';

    }]);

/**
 * registering application
 */
angular.module('cars', [
    'cars.controllers'
]);

