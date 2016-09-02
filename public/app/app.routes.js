System.register(['@angular/router', './components/heroes.component', './components/hero-detail.component', './components/dashboard.component'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var router_1, heroes_component_1, hero_detail_component_1, dashboard_component_1;
    var routes, APP_ROUTER_PROVIDERS;
    return {
        setters:[
            function (router_1_1) {
                router_1 = router_1_1;
            },
            function (heroes_component_1_1) {
                heroes_component_1 = heroes_component_1_1;
            },
            function (hero_detail_component_1_1) {
                hero_detail_component_1 = hero_detail_component_1_1;
            },
            function (dashboard_component_1_1) {
                dashboard_component_1 = dashboard_component_1_1;
            }],
        execute: function() {
            routes = [
                {
                    path: 'heroes',
                    component: heroes_component_1.HeroesComponent
                },
                {
                    path: 'dashboard',
                    component: dashboard_component_1.DashboardComponent
                },
                {
                    path: '',
                    redirectTo: '/dashboard',
                    terminal: true
                },
                {
                    path: 'detail/:id',
                    component: hero_detail_component_1.HeroDetailComponent
                }
            ];
            exports_1("APP_ROUTER_PROVIDERS", APP_ROUTER_PROVIDERS = [
                router_1.provideRouter(routes)
            ]);
        }
    }
});
