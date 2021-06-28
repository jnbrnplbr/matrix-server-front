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
                    <small class="text-light">Provide the remaining field.</small>
                    <div class="input-group mb-3 mt-3">
                        <input  name="email" type="text" class="form-control" placeholder="UP Email Address" disabled value="{{ $email }}">
                        <span class="input-group-text text-success"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg></span>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input name="password" type="password" id="input-password" class="form-control"   placeholder="Password" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="btn-password"><span id="icon" class="text-light fas fa-eye-slash"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Full Name">
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection



@section('jslinks')
    <script>
        $(document).ready(function() {
            $("#btn-password").click(function() {
                var className = $("#icon").attr('class');
                className = className.indexOf('slash') !== -1 ? 'fa fa-eye' : 'fa fa-eye-slash'
                $("#icon").attr('class', className);
                var input = $("#input-password");
                if (input.attr("type") == "text") {
                    input.attr("type", "password");
                } else {
                    input.attr("type", "text");
                }
            });
        });
    </script>
@endsection