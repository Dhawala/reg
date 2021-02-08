@extends('layout.app')
@section('style')
    <style>
        .card-2 .card-heading {
            background: url("../images/undraw_exams_g4ow.svg") top left/cover no-repeat;
            width: 29.1%;
            background-position: 10%, 0%;
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


                    <button class="btn btn--radius btn--red">Submit</button>
                    <button class="btn btn--radius btn--green" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
