@extends('layouts.default')

@section('title', 'signup')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12">
                <div class="col-md-8 col-md-offset-2">
                    <section class="user_info">
                        @include('shared._user_info')
                    </section>
                </div>
            </div>
        </div>
    </div>
@stop