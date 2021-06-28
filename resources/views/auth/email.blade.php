@extends('layouts.master')

@section('head')
<style>
    body {
        background-color: #8E153D;
    }
</style>
@endsection


@section('content')
    <div class="container">
        <form method="POST">
        @csrf
            <div class="row justify-content-center align-items-center" style="margin-top:200px;">
                <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-8">
                    @include('layouts.alert')    
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5">
                    <small class="text-light">Your email must be a valid <strong>UP Mail</strong> to be able to register successfully</small>
                    <div class="input-group mb-3 mt-3">
                        <input  name="email" type="text" class="form-control" placeholder="UP Email Address">
                        <button class="btn btn-outline-light text-light" type="submit" formaction="/verify/email">Check Availability</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection