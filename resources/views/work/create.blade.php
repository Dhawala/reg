@extends('layout.app')
@section('style')
    <style>
        .card-2 .card-heading {
            background: url("../images/undraw_certification_aif8.svg") top left/cover no-repeat;
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
            <h2 class="title">Educational Qualifications</h2>
            <form method="POST" action="{{url('/education/'.$applicant->reference_key)}}">
                @csrf
                @method('post')

                <div class="p-t-30">
                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group @error('degree_title') input_error @enderror">
                                <input type="text"
                                       placeholder="Title of the Degree / Diploma / Certificate (e.g. BSc in Computer Science)"
                                       name="degree_title"
                                       class="input--style-2"
                                       value="{{old('degree_title')}}"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">

                        <div class="col-2">
                            <div class="input-group @error('class_id') input_error @enderror">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="class_id" required>
                                        <option selected disabled>Class</option>
                                        @foreach($classes as$class)
                                        <option value="{{$class->id}}" {{ $class->id==old('class_id')?'selected':'' }}>
                                            {{$class->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group @error('graduation_date') input_error @enderror">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="Graduation Date"
                                       value="{{old('graduation_date')}}"
                                       name="graduation_date">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>

                    </div>

                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group @error('university_name') input_error @enderror">
                                <input type="text"
                                       value="{{old('university_name')}}"
                                       placeholder="Name of the University / Institution"
                                       name="university_name"
                                       class="input--style-2"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="row row-space" style="">
                        <button class="btn btn--radius btn--blue pull-to-start"
                        >Add <i class="fa fa-plus"></i></button>
                        <div class="input-group pull-to-end">
                            @if($applicant->educational_qualification->count()!=0)
                            <a href="{{url('/personal/'.$applicant->reference_key)}}"
                               class="btn btn--radius btn--green ">
                                <i class="fa fa-arrow-left"></i> Previous</a>
                            <a href="{{url('/work/'.$applicant->reference_key)}}" class="btn btn--radius btn--green"
                            >Next <i class="fa fa-arrow-right"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="row row-space">
                        @error('degree_title')<span class="danger">{{$message}}</span>@enderror
                        @error('class_id')<span class="danger">{{$message}}</span>@enderror
                        @error('university_name')<span class="danger">{{$message}}</span>@enderror
                        @error('graduation_date')<span class="danger">{{$message}}</span>@enderror
                    </div>
                </div>
            </form>

                <div class="p-t-30">
                    @foreach($applicant->educational_qualification as $qualification)
                        <div class="input-group p-b-10 row row-space">
                        <span class="pull-to-start" style="width: 90%">
                            <h3>{{$qualification->degree_title}}</h3>
                            <p>{{$qualification->class}}</p>
                            <p>Graduated @ {{$qualification->graduation_date}}</p>
                            <p><strong>From: {{$qualification->university_name}} </strong></p>
                        </span>
                            <span class="pull-to-end" style="width: 10%">
                            <form method="post" action="{{url('/education/'.$qualification->id) }}" style="all: unset; display: inline-block">
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
