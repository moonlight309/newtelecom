@extends('layouts.app')

@section('title')
    <title>Trang Chủ</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('admin.partials.contentHeader', ['name' => 'Users', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <a href="{{ route('user.getadd') }}" class="btn btn-primary float-right m-2">Add</a>
                        </div>
                        <form class="form-inline ml-3 float-right">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" ng-model="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr ng-repeat="urs in users | filter : Search">
                                    <th scope="row">[[ urs.name ]]</th>
                                    <td>[[ urs.email ]]</td>
                                    <td>
                                        <a href="" class=""></a>
                                        <button type="button" class="btn btn-default" data-bs-toggle="modal"
                                            data-bs-target="#modalId" ng-click="edit(urs.id)">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger btn-delete"
                                            ng-click="confirmDelete(urs.id)">Delete</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <form style="float:right ;">
                                <select ng-model="perpage" ng-options="num for num in [5, 10, 15,20]">
                                </select>
                            </form>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item" g-show="currentPage != 1">
                                        <a class="page-link" href="#" aria-label="Previous" ng-click="getCourse(1)">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item" ng-repeat="i in range" ng-class="{active : currentPage == i}">
                                        <a class="page-link" href="#" ng-click="getCourse(i)">[[ i ]]</a>
                                    </li>
                                    <li class="page-item" ng-show="currentPage != totalPages">
                                        <a class="page-link" href="#" aria-label="Next"
                                            ng-click="getCourse(totalPages)">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
            <edit-users></edit-users>
        </div>
    </div>
@endsection
