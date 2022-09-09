<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @yield('title')

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.2/angular.min.js"
        integrity="sha512-OboE6z4eMJ4Z58c77mLjwOChLo1ZoGMdBTd2ggt0PyheD8irXxmQBCqZkLPlz/rNC1f9kPsDuHRNuL2HKkm9FA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('angularJS/app.js') }}"></script>
    <script src="{{ asset('angularJS/loginController.js') }}"></script>
    <script src="{{ asset('angularJS/userController.js') }}"></script>
    <script src="{{ asset('angularJS/factory.js') }}"></script>
    <script src="{{ asset('angularJS/directive.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini" ng-app="myApp">

    <div class="wrapper">
        <div ng-Controller="loginCtrl">
            <header-users></header-users>
        </div>

        <div ng-Controller="userCtrl">
            <slide-bar-users></slide-bar-users>
            @yield('content')
        </div>

        <footer-users></footer-users>
    </div>

    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
