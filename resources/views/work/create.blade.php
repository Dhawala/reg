@extends('layout.app')
@section('style')
    <style>
        .card-2 .card-heading {
            background: url("../images/undraw_QA_engineers_dg5p.svg") top left/cover no-repeat;
            width: 29.1%;
            background-position: 20%, 0%;
            background-size: 150%;
            display: table-cell;
        }
    </style>
@endsection
@section('content')
    <div class="card card-2">
        <div class="card-heading"></div>
        <div class="card-body">
            <h2 class="title">Work Experience </h2>
            <form method="POST" action="{{ url('/work/'.$applicant->reference_key.'/') }}">
                @csrf
                @method('post')

                <div class="p-t-30">
                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group @error('company_name') input_error @enderror">
                                <input type="text"
                                       placeholder="Company Name"
                                       name="company_name"
                                       class="input--style-2"
                                       maxlength="100"
                                       value="{{old('company_name')}}"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group @error('position') input_error @enderror">
                                <input type="text"
                                       placeholder="Position"
                                       name="position"
                                       maxlength="60"
                                       class="input--style-2"
                                       value="{{old('position')}}"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">

                        <div class="col-2">
                            <div class="input-group @error('from') input_error @enderror">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="Starting date"
                                       value="{{old('from')}}"
                                       name="from">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group @error('to') input_error @enderror">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="Ending date"
                                       value="{{old('to')}}"
                                       name="to">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>

                    </div>


                    <div class="row row-space" style="">
                        <button class="btn btn--radius btn--blue pull-to-start"
                        >Add <i class="fa fa-plus"></i></button>
                        <div class="input-group pull-to-end">
                            <a href="{{url('/education/'.$applicant->reference_key)}}"
                               class="btn btn--radius btn--green ">
                                <i class="fa fa-arrow-left"></i> Previous</a>
                            <a href="{{url('/done/'.$applicant->reference_key)}}" class="btn btn--radius btn--green"
                            >Done <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                    <div class="row row-space">
                        @error('company_name')<span class="danger">{{$message}}</span>@enderror
                        @error('position')<span class="danger">{{$message}}</span>@enderror
                        @error('from')<span class="danger">{{$message}}</span>@enderror
                        @error('to')<span class="danger">{{$message}}</span>@enderror
                    </div>
                </div>
            </form>
            <div class="p-t-30">
                @foreach($applicant->work_experience as $work)
                    <div class="input-group p-b-10 row row-space">
                        <span class="pull-to-start" style="width: 90%">
                            <h3>{{$work->position}}</h3>
                            <p><strong>{{$work->company_name}}</strong></p>
                            <p>from {{$work->from}} to {{$work->to}}</p>
                        </span>
                        <span class="pull-to-end" style="width: 10%">
                            <form method="post" action="{{url('/work/'.$work->id) }}"
                                  style="all: unset; display: inline-block">
                                @csrf
                                @method('delete')
                            <button class="btn btn--red btn--radius"><strong>X</strong></button>
                            </form>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
