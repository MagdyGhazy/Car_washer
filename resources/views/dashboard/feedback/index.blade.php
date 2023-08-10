@extends('layouts.master')
@section('css')

@section('title')
    {{trans('mess.feed')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{trans('mess.feed')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item active">{{trans('mess.feed')}}</li>
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

{{--                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">--}}
{{--                    {{ trans('GradesTrans.AddGrade') }}--}}
{{--                </button>--}}
{{--                <br><br>--}}

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>

                        <th style="width: 25%">{{trans('mess.name')}}</th>
                        <th style="width: 25%">{{trans('mess.feed')}}</th>
                        <th style="width: 25%">{{trans('mess.image')}}</th>
                        <th style="width: 25%">عمليات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $review)






                                <td style="align-content: center">
                                    <p class="fw-normal mb-1">{{$review->name}}</p>

                                </td>


                                <td style="align-content: center">
                                    <p class="fw-normal mb-1">{{$review->feedback}}</p>

                                </td>



                                <td style="align-content: center">
                                <img style="width: 40%"
                                     @if($review->image == null)
                                         src="{{asset('assets/images/no_user.png')}}" class="testimonial-img" alt=""
                                     @else
                                         src="{{asset('assets/images/'.$review->image)}}" class="testimonial-img" alt=""
                                    @endif>

                                </td>


                        <td style="text-align: center">
                            <form action="{{route('feed.destroy',$review->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"class="btn btn-danger">حذف</button>
                            </form>
                           <a href="{{route('feed.show',$review->id)}} " class="btn btn-info" > اضافه</a>
                        </td>


                         <div class="modal fade" id="edit{{ $review->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                Edit
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- edit_form -->
{{--                                                <form action="{{ route('ServeProvide.update', 'test') }}" method="post" enctype="multipart/form-data">--}}
                                                    {{ method_field('patch') }}
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="name"
                                                                   class="mr-sm-2">Service Name
                                                                :</label>
                                                            <input id="name" type="text" name="name_ar"
                                                                   class="form-control"
                                                                   value="{{ $review->name }}"
                                                            >
                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                   value="{{ $review->id }}">
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label for="image"
                                                                   class="mr-sm-2">Logo
                                                            </label>
                                                            <input type="file" class="form-control" name="photo">
                                                            <img class="custom_img" src="{{asset('assets/images/'.$review->image)}}" width="60" height="60">

                                                        </div>
                                                    </div>

                                                    <br><br>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">{{ trans('aboutus_trans.Close') }}</button>
                                                        <button type="submit"
                                                                class="btn btn-success">{{ trans('aboutus_trans.submit') }}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
    {{--     aria-hidden="true">--}}
    {{--    <div class="modal-dialog" role="document">--}}
    {{--        <div class="modal-content">--}}
    {{--            <div class="modal-header">--}}
    {{--                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">--}}
    {{--                    {{ trans('mess.add') }}--}}
    {{--                </h5>--}}
    {{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                    <span aria-hidden="true">&times;</span>--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--         --}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--</div>--}}
<!-- row closed -->
@endsection
@section('js')

@endsection
