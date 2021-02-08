@extends('layout.app')
@section('style')
    <style>
        .card-2 .card-heading {
            background: url('../images/undraw_Mailbox_re_dvds.svg') top left/cover no-repeat;
            width: 29.1%;
            background-position: 100%, 0%;
            display: table-cell;
        }
    </style>
@endsection
@section('content')
    <div class="card card-2">
        <div class="card-heading"></div>
        <div class="card-body">
            <h2 class="title" style="color: #3F3D56">Hi {{$applicant->surname}}, We have sent You an Email..!</h2>
            <form method="GET" action="{{url('/education/'.$applicant->reference_key)}}">
                <div class="row row-space">
                    <h4 style="color: #6C63FF">If you need to change any detail you are about to submit, You can do so by clicking on the link sent to your email.
                    </h4>
                </div>
                <div class="p-t-30">
                    <button class="btn btn--radius btn--green" type="submit">Continue to fill in the rest <i class="fa fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
