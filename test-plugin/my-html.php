<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY TEST PLUGIN</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <!-- <script src="index.js" type="module"></script> -->
</head>
<body ng-app="my-app">
    <div ng-controller="test-controller">
    <input type="text" ng-model="inputData">
    <h4>{{inputData}}</h4>
    TEST HERE
        {{testdata}}
    </div>
</body>
</html>