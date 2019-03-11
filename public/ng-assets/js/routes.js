/* Setup Rounting For All Pages */
DentalClinicApp.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {
	// Redirect any unmatched url
	$urlRouterProvider.otherwise("/dashboard");

	$stateProvider

		// Dashboard
		.state('dashboard', {
			url: "/dashboard",
			templateUrl: "/dashboard",
			data: { pageTitle: 'Budget Dashboard' },
			controller: "DashboardController",
			resolve: {
				deps: ['$ocLazyLoad', function ($ocLazyLoad) {
					return $ocLazyLoad.load({
						name: 'DentalClinicApp',
						insertBefore: '#ng_load_plugins_before',
						files: [
                        'ng-assets/js/controllers/DashboardController.js',
                        ]
                    });
				}]
			}
		})


        // Home
        .state('home', {
            url: "/home",
            templateUrl: "views/home",
            data: { pageTitle: 'Home' },
            controller: "HomeController",
            resolve: {
                deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'DentalClinicApp',
                        insertBefore: '#ng_load_plugins_before',
                        files: [
                        'ng-assets/js/controllers/HomeController.js',
                        ]
                    });
                }]
            }
        })


        // Location
        .state('location', {
            url: "/location",
            templateUrl: "/location",
            data: { pageTitle: 'Location' },
            controller: "LocationController",
            resolve: {
                deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'DentalClinicApp',
                        insertBefore: '#ng_load_plugins_before',
                        files: [
                        'ng-assets/js/controllers/LocationController.js',
                        ]
                    });
                }]
            }
        })


    }]);