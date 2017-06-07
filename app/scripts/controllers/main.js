'use strict';

/**
 * @ngdoc function
 * @name holaApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the holaApp
 */
angular.module('holaApp')
  .controller('MainCtrl', function ($scope) {
    $scope.tareas  = ['Item 1' , 'Item 2' ,'Item 3'];
  });


