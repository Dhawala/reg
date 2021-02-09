@extends('layout.app')
@section('style')
    <style>
        .card-2 .card-heading {
            background: url('../images/undraw_complete_task_u2c3.svg') top left/cover no-repeat;
            width: 29.1%;
            background-position: 50%, 0%;
            display: table-cell;
        }
    </style>
@endsection
@section('content')
    <div class="card card-2">
        <div class="card-heading"></div>
        <div class="card-body">
            <h2 class="title" style="color: #3F3D56">Thank you {{$applicant->surname}} !</h2>
                <div class="row row-space">
                    <h4 style="color: #6C63FF"> If you want to change any thing you entered, use the email link to visit.
                        <br>We will inform you when we are evaluating the applications.
                    </h4>
                </div>
        </div>
    </div>
@endsection
