app.directive("editUsers", function () {
    return {
        restrict: "E",
        templateUrl: "http://127.0.0.1:8088/directive/editUrs",
    };
});

app.directive("headerUsers", function () {
    return {
        restrict: "E",
        templateUrl: "http://127.0.0.1:8088/directive/headerUrs",
    };
});

app.directive("slideBarUsers", function () {
    return {
        restrict: "E",
        templateUrl: "http://127.0.0.1:8088/directive/slideBarUrs",
    };
});

app.directive("footerUsers", function () {
    return {
        restrict: "E",
        templateUrl: "http://127.0.0.1:8088/directive/footerUrs",
    };
});
