const app = angular.module('my-app', []);

app.controller('test-controller', ['$scope', function($scope) {


    $scope.inputData = "";
    $scope.testdata = "hey";
    console.log("I AM LOADED");
}]);