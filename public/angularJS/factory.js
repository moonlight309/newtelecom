app.factory("factoryUser", function ($http, API) {
    var factory = {};
    factory.add = function (username, useremail, userpassword) {
        var url = API + "users/add";
        $http({
            method: "POST",
            url: url,
            data: {
                name: username,
                email: useremail,
                password: userpassword,
            },
        })
            .then(function () {
                location.reload();
                alert("Add Successful");
            })
            .catch((error) => {
                alert(error.data.message);
            });
    };

    factory.update = function (user, id) {
        var url = API + "users/edit/" + id;
        console.log(url);
        $http({
            method: "PUT",
            url: url,
            data: user,
        })
            .then(function () {
                location.reload();
                alert("Update Successful");
            })
            .catch((error) => {
                alert(error.data.message);
            });
    };

    factory.delete = function (id) {
        var isConfirmDelete = confirm(
            "are you sure you want to delete this line?"
        );
        if (isConfirmDelete) {
            $http
                .get(API + "users/delete/" + id)
                .then(function () {
                    location.reload();
                    alert("Delete Successful");
                })
                .catch(function () {
                    alert("Error occurred, Check again");
                });
        } else {
            return false;
        }
    };

    return factory;
});
