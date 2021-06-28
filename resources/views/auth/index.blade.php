@extends('layouts.master')

@section('head')
<style>
body {
    background: url(/images/background.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
@endsection


@section('content')
    
    <div class="container">

        <div class="row justify-content-center align-items-center" style="margin-top:200px;">
            <div class="col-12 col-sm-12 col-md-10 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/images/logo.png" class="img-thumbnail" alt="...">
                        <h5 class="card-title text-center">Welcome to UP Matrix Server</h5>
                        <div class="d-grid gap-2">
                            <a href="https:///app.element.io/#/login" class="btn btn-lg btn-block text-light" style="background-color:#8E153D;">Log In</a>
                            <a href="/verify/email" class="btn btn-lg btn-block text-light" style="background-color:#8E153D;"> Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection