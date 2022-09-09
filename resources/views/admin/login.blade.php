<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
    <script src="{{ asset('angularJS/loginController.js') }}"></script>

</head>

<body ng-app="myApp" ng-controller="loginCtrl">

    <div id="logreg-forms">
        <form class="form-signin" action="">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Sign in</h1>
            <br>
            <div class="input-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                    ng-model="emaillogin">
            </div>
            <br>
            <div class="input-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                    ng-model="passwordlogin">
            </div>
            <br>
            <div class="input-group">
                <button class="btn btn-md btn-rounded btn-block form-control submit" type="button"
                    ng-click="login()">Sign in</button>
            </div>
            <br>
        </form>

    </div>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>
