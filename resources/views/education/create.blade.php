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
                            <div class="input-group">
                                <input type="text"
                                       placeholder="Title of the Degree / Diploma / Certificate (e.g. BSc in Computer Science)"
                                       name="degree_title"
                                       class="input--style-2"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">

                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="class" required>
                                        <option selected disabled>Class</option>
                                        <option value="1">Not Applicable</option>
                                        <option value="2">First-Class Honours</option>
                                        <option value="3">Upper Second-Class Honours</option>
                                        <option value="4">Lower Second-Class Honours</option>
                                        <option value="5">Third-Class Honours</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="Graduation Date"
                                       name="graduation_date">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>

                    </div>

                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group">
                                <input type="text"
                                       placeholder="Name of the University / Institution"
                                       name="degree_title"
                                       class="input--style-2"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="row row-space" style="">
                        <button class="btn btn--radius btn--blue pull-to-start"
                        >Add <i class="fa fa-plus"></i></button>
                        <div class="input-group pull-to-end">
                            <a href="{{url('/personal/'.$applicant->reference_key)}}"
                               class="btn btn--radius btn--green ">
                                <i class="fa fa-arrow-left"></i> Previous</a>
                            <a href="{{url('/work/'.$applicant->reference_key)}}" class="btn btn--radius btn--green"
                            >Submit and next <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="p-t-30">
                <div class="input-group p-b-10 row row-space">
                    <span class="pull-to-start">
                        <h2>BSc in Computer Science</h2>
                        <p>First-Class Honours</p>
                        <p>Graduated @ 2018-07-28</p>
                        <p><strong>From: Open University </strong></p>
                    </span>
                    <span class="pull-to-end">
                        <a href="" class="btn btn--red btn--radius"><strong>X</strong></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
