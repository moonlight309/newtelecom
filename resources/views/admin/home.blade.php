@extends('layouts.app')

@section('title')
    <title>Trang Chủ</title>
@endsection




@section('content')
    <div class="content-wrapper">
        @include('admin.partials.contentHeader', ['name' => 'Home', 'key' => 'home'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        Trang Chủ
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
