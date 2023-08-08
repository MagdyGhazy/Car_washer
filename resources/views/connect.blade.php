
@extends('layouts.master')
@section('css')

    @section('title')
        empty
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> connect us</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Title</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    @foreach($Connects as $Connect)
                        <form action="{{ route('connect.update', 'test') }}" method="post">
                            {{ method_field('PUT') }}
                            @csrf
                            {{ 'approve request'}}

                            <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">whats</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="whats" value="{{$Connect->whats}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">worktime</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" name="worktime"value="{{$Connect->worktime}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">twlinke</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" name="twlinke"value="{{$Connect->twlinke}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">inslinke</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4" name="inslinke"value="{{$Connect->inslinke}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput5" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput5" name="email"value="{{$Connect->email}}">
                    </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput6" class="form-label">usermail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput6" name="usermail"value="{{$Connect->usermail}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">cover</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cover">{{$Connect->cover}}</textarea>
                    </div>

                            <div class="col-auto">
                                <button type="submit" class="btn btn-success">Confirm identity</button>
                            </div>

                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
