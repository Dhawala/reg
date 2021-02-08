<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sample Form for Ousl applicant registration">
    <meta name="author" content="Dhawala Ranaeera">
    <meta name="keywords" content="OUSL,sample application form,Dhawla Ranaweera">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset("vendor/font-awesome-4.7/css/font-awesome.min.css")}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-120 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Applicant Registration Form</h2>
                    <form method="POST" action="{{url('/')}}">
                        @csrf
                        @method('post')
                        <div class="row row-space">
                        <div class="col-2">
                        <div class="input-group">
                            <input class="input--style-2 " type="text" placeholder="Surname" name="surname" value="{{old('surname')}}" required>
                        </div>
                        </div>
                        <div class="col-2">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="First Names" name="firstname" value="{{old('firstname')}}" required>
                        </div>
                        </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text"
                                           title="Valid Sri Lankan NIC numbers only"
                                           pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$"
                                           placeholder="NIC Number"
                                           name="nic_number"
                                           value="{{old('nic_number')}}"
                                           required
                                    >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text"
                                           title="Phone numbers only"
                                           pattern="^(\+\d{1,3}[- ]?)?\d{10}$"
                                           placeholder="Phone"
                                           name="phone_number"
                                           value="{{old('phone_number')}}"
                                           required
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="email"
                                           placeholder="E-Mail"
                                           name="email"
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
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>

</body>

</html>
<!-- end document-->
