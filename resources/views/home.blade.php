@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <router-view></router-view>
            </div>
        </div>
    </div>
@endsection
