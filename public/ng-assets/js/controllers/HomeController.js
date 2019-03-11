/* Setup blank page controller */
angular.module('DentalClinicApp').controller('HomeController', ['$rootScope', '$scope', '$http', function ($rootScope, $scope, $http) {
    $scope.$on('$viewContentLoaded', function () {
        // initialize core components
        App.initAjax();

        // set default layout mode
        
    });
}]);
