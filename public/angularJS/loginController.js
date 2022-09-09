var app = angular
    .module("myApp", [], function ($interpolateProvider) {
        $interpolateProvider.startSymbol("[[");
        $interpolateProvider.endSymbol("]]");
    })
    .constant("API", "http://127.0.0.1:8088/");
app.controller("loginCtrl", function ($scope, $http, API, $window) {
    $scope.login = function () {
        var url = API + "login";
        $http({
            method: "POST",
            url: url,
            data: {
                email: $scope.emaillogin,
                password: $scope.passwordlogin,
            },
        })
            .then(function (response) {
                if (response.data.message == "success") {
                    console.log(response.data.token);
                    $window.localStorage.setItem("token", response.data.token);
                    $window.location.href = API + "users/home";
                } else {
                    alert("Email or Password is incorrect");
                }
            })
            .catch(function (error) {
                console.log(error.data);
            });
    };

    $scope.logout = function () {
        console.log($window.localStorage.getItem("token"));
        $http
            .get(API + "logout", {
                dataType: "json",
                headers: {
                    "Content-Type": "application/json",
                    Authorization:
                        "Bearer " + $window.localStorage.getItem("token"),
                },
            })
            .then(function (response) {
                if (response.data.message == "logout") {
                    $window.localStorage.clear();
                    window.location.replace(API);
                }
            })
            .catch((error) => {
                alert(error.data.message);
            });
    };
});
