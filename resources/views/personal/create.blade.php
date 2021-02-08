@extends('layout.app')
@section('style')
    <style>
        .card-2 .card-heading {
            background: url("../images/undraw_interview_rmcf.svg") top left/cover no-repeat;
            width: 29.1%;
            background-position: 55%, 0%;
            display: table-cell;
        }
    </style>
@endsection
@section('content')
    <div class="card card-2">
        <div class="card-heading"></div>
        <div class="card-body">
            <h2 class="title">Applicant Registration Form</h2>
            <form method="POST" action="{{url('/')}}">
                @csrf
                @method('post')
                <div class="row row-space">
                    <div class="col-2 ">
                        <div class="input-group @error('surname') input_error @enderror">
                            <input class="input--style-2 " type="text"
                                   placeholder="Surname"
                                   name="surname"
                                   value="{{old('surname')}}"
                                   maxlength="60"
                                   required>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group @error('firstname') input_error @enderror">
                            <input class="input--style-2" type="text"
                                   placeholder="First Names"
                                   name="firstname"
                                   value="{{old('firstname')}}"
                                   maxlength="150"
                                   required
                            >
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group @error('nic_number') input_error @enderror">
                            <input class="input--style-2" type="text"
                                   title="Valid Sri Lankan NIC numbers only"
                                   pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$"
                                   placeholder="NIC Number"
                                   name="nic_number"
                                   maxlength="12"
                                   value="{{old('nic_number')}}"
                                   required
                            >
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group @error('phone_number') input_error @enderror">
                            <input class="input--style-2" type="text"
                                   title="Phone numbers only"
                                   pattern="^(\+\d{1,3}[- ]?)?\d{10}$"
                                   placeholder="Phone"
                                   name="phone_number"
                                   maxlength="15"
                                   value="{{old('phone_number')}}"
                                   required
                            >
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group @error('email') input_error @enderror">
                            <input class="input--style-2" type="email"
                                   placeholder="E-Mail"
                                   name="email"
                                   maxlength="60"
                                   value="{{old('email')}}"
                            >
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    @error('surname')<span class="danger">{{$message}}</span>@enderror
                    @error('firstname')<span class="danger">{{$message}}</span>@enderror
                    @error('nic_number')<span class="danger">{{$message}}</span>@enderror
                    @error('phone_number')<span class="danger">{{$message}}</span>@enderror
                    @error('email')<span class="danger">{{$message}}</span>@enderror
                </div>
                <div class="row row-space">
                    <span class="pull-to-start"></span>
                    <button class="btn btn--radius btn--green pull-to-end" type="submit">Submit and Next
                        <i class="fa fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
