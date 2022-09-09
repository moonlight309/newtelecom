app.controller("userCtrl", [
    "$scope",
    "$http",
    "API",
    "factoryUser",
    "$window",
    appController,
]);

function appController($scope, $http, API, factoryUser, $window) {
    $scope.users = [];

    $scope.totalPages = 0;
    $scope.currentPage = 1;
    $scope.range = [];

    $scope.getCourse = function (pageNumber) {
        if (pageNumber === null) {
            pageNumber = "1";
        }
        $http
            .get(API + "users/list" + "?page=" + pageNumber)
            .then(function (response) {
                $scope.users = response.data.data;
                $scope.totalPages = response.data.last_page;
                $scope.currentPage = response.data.current_page;
                var pages = [];

                for (var i = 1; i <= response.data.last_page; i++) {
                    pages.push(i);
                }
                $scope.range = pages;
            })
            .catch(function (err) {
                console.log("err: ", err);
            });
    };

    $http
        .get(API + "users/list", {
            headers: {
                "Content-Type": "application/json",
                Authorization:
                    "Bearer " + $window.localStorage.getItem("token"),
            },
        })
        .then(function (response) {
            $scope.users = response.data.data;

            pages = [];
            for (var i = 1; i <= response.data.last_page; i++) {
                pages.push(i);
            }
            $scope.range = pages;
        })
        .catch(function (err) {
            console.log("err: ", err);
        });

    $scope.add_user = function () {
        $scope.datas = factoryUser.add(
            $scope.username,
            $scope.useremail,
            $scope.userpassword
        );
    };

    $scope.edit = function (id) {
        for (var i in $scope.users) {
            if ($scope.users[i].id == id) {
                $scope.user = angular.copy($scope.users[i]);
            }
        }
    };

    $scope.update = function (id) {
        $scope.users = factoryUser.update($scope.user, id);
    };

    $scope.confirmDelete = function (id) {
        $scope.datas = factoryUser.delete(id);
    };
}
