@extends('admin.index')

@section('show')
    <div class="row-card col-md-12 col-sm-12 col-xs-12" style="padding: 1%">
        <h2 class="primary-section-heading">
            Summary
        </h2>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-info" style="height: 300px;padding: 5%">
                <h2>Curricula</h2>
                <hr>
                <h4>Amount: {{ $curricula }}</h4>
                <a href="{{ url('admin/curricula/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-success" style="height: 300px;padding: 5%">
                <h2>Blog</h2>
                <hr>
                <h4>Amount: {{ $blog }}</h4>
                <a href="{{ url('admin/blog/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-warning" style="height: 300px;padding: 5%">
                <h2>Teacher</h2>
                <hr>
                <h4>Amount: {{ $teacher }}</h4>
                <a href="{{ url('admin/teacher/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-warning" style="height: 300px;padding: 5%">
                <h2>Staff</h2>
                <hr>
                <h4>Amount: {{ $staff }}</h4>
                <a href="{{ url('admin/staff/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-danger" style="height: 300px;padding: 5%">
                <h2>Research</h2>
                <hr>
                <h4>Amount: {{ $research }}</h4>
                <a href="{{ url('admin/research/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-danger" style="height: 300px;padding: 5%">
                <h2>Image</h2>
                <hr>
                <h4>Amount: {{ $image }}</h4>
                <a href="{{ url('admin/image/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-danger" style="height: 300px;padding: 5%">
                <h2>File</h2>
                <hr>
                <h4>Amount: {{ $file }}</h4>
                <a href="{{ url('admin/file/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6" style="padding: 10px">
            <div class="bg-danger" style="height: 300px;padding: 5%">
                <h2>User</h2>
                <hr>
                <h4>Amount: {{ $user }}</h4>
                <a href="{{ url('admin/user/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>
        {{--<div class="col-md-3" style="padding: 10px">
            <div class="bg-danger" style="height: 300px;padding: 5%">
                <h2>Thesis</h2>
                <hr>
                <h4>Amount: {{ $thesis }}</h4>
                <a href="{{ url('admin/thesis/create') }}" class="btn btn-default">Create</a>
            </div>
        </div>--}}

    </div>
@stop