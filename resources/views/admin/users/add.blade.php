@extends('layouts.app')

@section('title')
    <title>Trang Chủ</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('admin.partials.contentHeader', ['name' => 'Users', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('user.postadd') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                    ng-model="username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                    ng-model="useremail">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Email" name="password"
                                    ng-model="userpassword">
                            </div>
                            
                            <button type="button" class="btn btn-primary" ng-click="add_user()">Add New</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
