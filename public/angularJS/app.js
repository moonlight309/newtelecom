var app = angular
    .module(
        "myApp",
        ["angularUtils.directives.dirPagination"],
        function ($interpolateProvider) {
            $interpolateProvider.startSymbol("[[");
            $interpolateProvider.endSymbol("]]");
        }
    )
    .constant("API", "http://127.0.0.1:8088/");


