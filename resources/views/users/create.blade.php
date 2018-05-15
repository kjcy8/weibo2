@extends('layouts.default')

@section('title', 'signup')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h5>注册</h5></div>
            <div class="panel-body">
                @include('shared._errors')
                <form action="{{ route('users.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">账号：</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <lable for="password">密码：</lable>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <lable for="password">确认密码：</lable>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmtion') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop