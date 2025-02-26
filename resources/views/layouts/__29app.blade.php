<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">


 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Techno Forms') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Main Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/styles/style.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-design/css/materialdesignicons.css') }}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">


    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/waves/waves.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/sweet-alert/sweetalert.css') }}">

    <!-- Morris Chart -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/chart/morris/morris.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/datatables/media/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/select2/css/select2.min.css')}}">


    @if(Auth::check())

    <style type="text/css">
    <style>.switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }


    #imagePreview_installer,#imagePreview_designer,#imageUpload_electrician{
    position: relative;
    }

    .avatar-preview:hover .avtar-checkbox{
        display: block;
    }

    .avtar-checkbox{
        display: none;
        position: absolute;
        top: 50%;
        }

    #ajaxdownloadimage1,#ajaxdownloadimage2,#ajaxdownloadimage3{
        color: #fff;
    }


    /* 21-09-2021  autoComplete*/
 
    .autocomplete {
        /*the container must be positioned relative:*/
        position: relative;
        display: inline-block;
        width:104%;
        }

        .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
       
         overflow-y: auto;
         height: auto;
        max-height: 150px;
        }
        .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
        /*when hovering an item:*/
        background-color: #e9e9e9;
        }
        .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: DodgerBlue !important;
        color: #ffffff;
        }
    /* 21-09-2021  autoComplete*/

    </style>
    @endif

</head>

<body>

    @if(Auth::check())
    <!-- custom theme -->

    <div class="main-menu">
        <header class="header">
            <a href="{{url('/')}}/home" class="logo">
                <img src="{{ asset('assets/images/logo/TF-logo-1.png') }}" id="user_image">
            </a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
            <div class="user">
                <a href="#" class="avatar"><img src="{{ asset('assets/images/circle-icon.png') }}" alt=""><span
                        class="status online"></span></a>
                <h5 class="name"><a href="profile.html">{{ Auth::user()->name }}</a></h5>
                <h5 class="position">Administrator</h5>
                <!-- /.name -->
                <div class="control-wrap js__drop_down">
                    <i class="fa fa-caret-down js__drop_down_button"></i>
                    <div class="control-list">
                        <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                        <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                        <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
                    </div>
                    <!-- /.control-list -->
                </div>
                <!-- /.control-wrap -->
            </div>
            <!-- /.user -->
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation">
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li class="nav_li current">
                        <a class="waves-effect nav_a" href="{{route('home')}}" id="nav_dashboard"><i
                                class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                    </li>

                    <li class="nav_li" id="company_li">
                        <a class="waves-effect nav_a" href="{{route('company.index')}}" id="nav_company"><i
                                class="menu-icon mdi mdi-desktop-mac"></i><span>Company</span></a>
                    </li>
                    <li class="nav_li" id="roles_li">
                        <a class="waves-effect nav_a" href="{{route('roles.index')}}" id="nav_roles"><i
                                class="menu-icon mdi mdi-account-star"></i><span>Roles</span></a>
                    </li>
                    <li class="nav_li" id="status_li">
                        <a class="waves-effect nav_a" href="{{route('status.index')}}" id="nav_status"><i
                                class="menu-icon mdi mdi-chart-pie"></i><span>Status</span></a>
                    </li>
                    <li class="nav_li" id="installer_li">
                        <a class="waves-effect nav_a" href="{{route('installer.index')}}" id="nav_installer"><i
                                class="menu-icon fa fa-download"></i><span>Installer</span></a>
                    </li>
                    <li class="nav_li" id="job_li">
                        <a class="waves-effect nav_a" href="{{route('job.index')}}" id="nav_job"><i
                                class="menu-icon mdi mdi-briefcase"></i><span>Jobs</span></a>
                    </li>
                    <li class="nav_li" id="inventory_li">
                        <a class="waves-effect nav_a" href="{{route('inventory.index')}}" id="nav_inventory"><i
                                class="menu-icon fa fa-cube"></i><span>Inventory</span></a>
                    </li>
                    <li class="nav_li" id="manufacturer_li">
                        <a class="waves-effect nav_a" href="{{route('manufacturer.index')}}" id="nav_manufacturer"><i
                                class="menu-icon fa fa-building"></i><span>Manufacturer</span></a>
                    </li>
                    <li class="nav_li" id="model_li">
                        <a class="waves-effect nav_a" href="{{route('model.index')}}" id="nav_model"><i
                                class="menu-icon mdi fa-modx"></i><span>Model</span></a>
                    </li>
                    <li class="nav_li" id="supplier_li">
                        <a class="waves-effect nav_a" href="{{route('supplier.index')}}" id="nav_supplier"><i
                                class="menu-icon mdi mdi-truck"></i><span>Supplier</span></a>
                    </li>
                    <li class="nav_li" id="unverified_installer_li">
                        <a class="waves-effect nav_a" href="{{route('unverified_installer.index')}}"
                            id="nav_unverified_installer"><i class="menu-icon mdi mdi-truck"></i><span>Unverified
                                Installer</span></a>
                    </li>
                </ul>
                <!-- /.menu js__accordion -->

                <!-- /.menu js__accordion -->
            </div>
            <!-- /.navigation -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar">
        <div class="pull-left">
            <input type="hidden" id="current_state" value="system">
            <input type="hidden" id="app_url" value="{{url('/')}}">
            <input type="hidden" id="menu_state" value="full">
            <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"
                id="menu_button"></button>
            <!-- <h1 class="page-title">Home</h1> -->
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">
            <div class="ico-item">
                <a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
                <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search"
                        placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search"
                        type="submit"></button></form>
                <!-- /.searchform -->
            </div>
            <!-- /.ico-item -->
            <a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
            <a href="#" class="ico-item pulse"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open"
                    data-target="#notification-popup"></span></a>
            <a href="{{ route('logout') }}" class="ico-item mdi mdi-logout" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"></a>
        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->

    <div id="notification-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Your Notifications</h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">10 min</span>
                    </a>
                </li>
            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#notification-popup -->

    <div id="message-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">10 min</span>
                    </a>
                </li>
            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#message-popup -->

    <!-- custom theme -->



    <div id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">
                @endif
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                        <div class="">
                            <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                            <!-- Left Side Of Navbar -->
                            <!--  <ul class="navbar-nav mr-auto"></ul> -->


                            <!-- Right Side Of Navbar -->
                            <!-- <ul class="navbar-nav ml-auto"> -->
                            <!-- Authentication Links -->
                            @guest
                            <!-- <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>-->
                            @else
                            <!-- <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->


                            <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                -->

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <!-- </div>
                                </li> -->
                            @endguest
                            <!--  </ul>
                </div>
            </div>
        </nav> -->


                            <main class="py-4">
                                <div class="container-fluid">
                                    @yield('content')
                                </div>
                            </main>
                        </div>

                        @if(Auth::check())
                        <footer class="footer">
                            <ul class="list-inline">
                                <li>2021 © TechnoForms.</li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </footer>
                </div>
                <!-- /.main-content -->
            </div>
            @endif

            <!--/#wrapper -->
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
        <script src="assets/script/html5shiv.min.js }}"></script>
        <script src="assets/script/respond.min.js }}"></script>
    <![endif]-->
            <!-- 
        ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>

            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
            <script src="{{ asset('assets/scripts/modernizr.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/nprogress/nprogress.js') }}"></script>
            <script src="{{ asset('assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/waves/waves.min.js') }}"></script>

            <!-- Morris Chart -->
            <script src="{{ asset('assets/plugin/chart/morris/morris.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/chart/morris/raphael-min.js') }}"></script>
            <script src="{{ asset('assets/scripts/chart.morris.init.min.js') }}"></script>

            <!-- Flot Chart -->
            <script src="{{ asset('assets/plugin/chart/plot/jquery.flot.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/chart/plot/jquery.flot.tooltip.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/chart/plot/jquery.flot.categories.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/chart/plot/jquery.flot.pie.min.js') }}"></script>
            <script src="{{ asset('assets/plugin/chart/plot/jquery.flot.stack.min.js') }}"></script>
            <script src="{{ asset('assets/scripts/chart.flot.init.min.js') }}"></script>

            <!-- Sparkline Chart -->
            <script src="{{ asset('assets/plugin/chart/sparkline/jquery.sparkline.min.js') }}"></script>
            <script src="{{ asset('assets/scripts/chart.sparkline.init.min.js') }}"></script>

            <!-- FullCalendar -->
            <script src="{{ asset('assets/plugin/moment/moment.js') }}"></script>
            <script src="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
            <script src="{{ asset('assets/scripts/fullcalendar.init.js') }}"></script>

            <!-- Data Tables -->
            <script src="{{ asset('assets/plugin/datatables/media/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{ asset('assets/plugin/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}">
            </script>
            <script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js')}}">
            </script>
            <script src="{{ asset('assets/scripts/datatables.demo.min.js')}}"></script>
            <script src="{{ asset('assets/scripts/main.js') }}"></script>
            <script src="{{ asset('assets/plugin/select2/js/select2.min.js')}}" defer></script>




            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSR5vFOoB3SvPTNoPG1ZAEqX1N84m-7fc&callback=initAutocomplete&libraries=places&v=weekly"
                async></script>

            <!-- js pdf -->
            <script src="{{ asset('assets/scripts/jsPdf/jspdf.debug.js')}}"></script>
            <script src="{{ asset('assets/scripts/jsPdf/html2pdf.js')}}"></script>


            <script type="text/javascript">
            function add_more_button() {
                var max_fields = 10; //maximum input boxes allowed
                var wrapper = $(".owner-details-wrapper-panel"); //Fields wrapper
                var add_button = $(".add_field_button"); //Add button ID
                var x = $(".owner-details-wrapperone").length; //initlal text box count
               // $(".add_field_button").click(function(e) { //on add input button click
                    //e.preventDefault();
                    if (x < max_fields) { //max input box allowed
                        ++x; //text box increment
                        //alert(x);
                   // $(wrapper).append( '<div class=""> <div class="owner-details-wrapperone" id="newone"> <div class="heading-one"> <h4 style="visibility: hidden">Panels:</h4><input type="button" class="btn btn-info add_field_button" onclick="add_more_button();" value="Add More Fields"></div> <div class="row"> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Panels_search" class="control-label"> Quick Search: </label> <input type="date" class="form-control" id="install_date" name="install_date[]" value=""> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Title" class="control-label"> Total Number of solar panel </label> <input type="text" class="form-control" id="total_no_solar_panel" name="total_no_solar_panel[]" value="{{old('no_solar_panel ')}}"> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="Panels_Brand" class="control-label">Brand <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="Panels_Brand" name="Panels_Brand[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 2</option> <option value="3">Select 3</option> </select> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="Model" class="control-label">Model <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="Panels_Model" name="Panels_Model[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 2</option> <option value="3">Select 3</option> </select> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Title" class="control-label"> Enter number of Solar Panels </label> <input type="text" class="form-control" id="enter_no_of_solar_panal" name="enter_no_of_solar_panal[]" value="{{old('title ')}}"> </div> </div> </div> <a href="#" class="btn btn-primary remove_field">Remove</a></div></div>' ); //add input box 
                     $(wrapper).append( ' <div class="owner-details-wrapperone" id="newone"> <div class="heading-one"> <h4 style="visibility: hidden">Panels:</h4></div> <div class="row"> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group autocomplete"> <label for="Panels_search" class="control-label"> Quick Search: </label> <input type="hidden" value="" name="panel_id[]"><input type="text" class="form-control quick_search" id="install_date'+x+'" name="install_date[]" value=""> </div> </div> <div class="Brand  col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="Panels_Brand" class="control-label">Brand <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="Panels_Brand" name="Panels_Brand[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 2</option> <option value="3">Select 3</option> </select> </div> </div> <div class="Model col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="Model" class="control-label">Model <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="Panels_Model" name="Panels_Model[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 2</option> <option value="3">Select 3</option> </select> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Title" class="control-label"> Enter number of Solar Panels </label> <input type="text" class="form-control txt panel" id="enter_no_of_solar_panal" name="enter_no_of_solar_panal[]" value="{{old('title ')}}"  onkeyup="rated_power()"> </div> </div> </div> <a href="#" class="btn btn-primary remove_field">Delete</a></div>' ); //add input box 
                    }
               // }); 
               quick_search();
                $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;

                })
            }

            function add_more_inverter_button() {
                var max_fields = 10; //maximum input boxes allowed
                var wrapper = $(".inventory-wrapper"); //Fields wrapper
                var add_button = $(".add_field_buttontwo"); //Add button ID

                var x = $(".owner-details-wrappertwo").length; //initlal text box count 
               // $(".add_field_buttontwo").click(function(e) { //on add input button click
                   // e.preventDefault();
                    if (x < max_fields) { //max input box allowed
                        ++x; //text box increment 
                        //$(wrapper).append(
                         //   '<div><div class="owner-details-wrappertwo" ><div class="heading-one"> <h4 style="visibility: hidden">Panels:</h4><input type="button" class="btn btn-info add_field_button" onclick="add_more_inverter_button();" value="Add More Fields"></div><div class="row"> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Title" class="control-label"> Quick Search: </label> <input type="date" class="form-control" id="inverter_Quick_Search" name="inverter_Quick_Search[]" value="{{old('
                            //title ')}}"> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="inverter_Brand" class="control-label">Brand <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="inverter_Brand" name="inverter_Brand[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 1</option> <option value="3">Select 1</option> </select> </div> </div> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="inverter_Series" class="control-label">Series <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="inverter_Series" name="inverter_Series[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 1</option> <option value="3">Select 1</option> </select> </div> </div><div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="inverter_Model" class="control-label">Model <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="inverter_Model" name="inverter_Model[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 1</option> <option value="3">Select 1</option> </select> </div> </div><div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Enter number of inverter" class="control-label"> Enter number of inverter </label> <input type="text" class="form-control" id="Enter_number_of_inverter" name="Enter_number_of_inverter[]" value="{{old('
                            //title ')}}"> </div> </div> </div> </div> <a href="#" class="btn btn-primary remove_field" >Remove</a></div>'
                            $(wrapper).append(
                            '<div class="owner-details-wrappertwo" id="newtow"><div class="heading-one"> <h4 style="visibility: hidden">Panels:</h4></div><div class="row"> <div class="col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group autocomplete"> <label for="Title" class="control-label"> Quick Search: </label><input type="hidden" value="" name="inverter_id[]"> <input type="text" class="form-control quick_search_inverter" id="inverter_Quick_Search'+x+'" name="inverter_Quick_Search[]" value="{{old('
                            title ')}}"> </div> </div> <div class="Brand col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="inverter_Brand" class="control-label">Brand <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="inverter_Brand" name="inverter_Brand[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 1</option> <option value="3">Select 1</option> </select> </div> </div> <div class="Series col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="inverter_Series" class="control-label">Series <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="inverter_Series" name="inverter_Series[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 1</option> <option value="3">Select 1</option> </select> </div> </div><div class="Model col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group select-wrapper"> <label for="inverter_Model" class="control-label">Model <span class="mdi mdi-multiplication"></span></label> <select class="form-control" id="inverter_Model" name="inverter_Model[]" {{-- disabled --}}> <option value="">Select selected</option> <option value="1">Select 1</option> <option value="2">Select 1</option> <option value="3">Select 1</option> </select> </div> </div><div class=" col-xl-4 col-lg-4 col-md-12 mb-3"> <div class="form-group"> <label for="Enter number of inverter" class="control-label"> Enter number of inverter </label> <input type="text" class="form-control" id="Enter_number_of_inverter" name="Enter_number_of_inverter[]" value="{{old('
                            title ')}}"> </div> </div> </div> <a href="#" class="btn btn-primary remove_field" >Delete</a> </div> '
                        ); //add input box
                    }
               // });
               quick_search_inverter();
                $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                    //location.reload();
                //location.reload();
                })
            }



            

           $('.owner-details-wrapper-panel').on("click", ".remove_field", function(e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                 })
                 
                 $('.inventory-wrapper').on("click", ".remove_field", function(e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('div').remove();
                  //  x--;
                 })


                 $("#imagePreview_installer").mouseover(function() {
                 $("#installer_CheckBox").show();
                 });

                 
                 //Download button show based on checkbox
                $(document).ready(function() 
                {
                      $('#flip-ch1').hide();
                      $('#installer_CheckBox').mouseup(function() {
                      $('#flip-ch1').toggle();
                        });
                });

                $(document).ready(function() 
                {
                      $('#flip-ch2').hide();
                      $('#designer_CheckBox').mouseup(function() {
                      $('#flip-ch2').toggle();
                        });
                });

                $(document).ready(function() 
                {
                      $('#flip-ch3').hide();
                      $('#electrician_CheckBox').mouseup(function() {
                      $('#flip-ch3').toggle();
                        });
                });



                 function Panel_Serial_Numbers(id){
                    //alert("Invetrers_Serial_Numbers"+id);
                    $("#Panel_Serial_Numbers"+id).remove();

                 }

                 function Invetrers_Serial_Numbers(id){
                    //alert("Invetrers_Serial_Numbers"+id);
                    $("#Invetrers_Serial_Numbers"+id).remove();

                 }

            // This sample uses the Places Autocomplete widget to:
            // 1. Help the user select a place
            // 2. Retrieve the address components associated with that place
            // 3. Populate the form fields with those address components.
            // This sample requires the Places library, Maps JavaScript API.
            // Include the libraries=places parameter when you first load the API.
            // For example: <script
            // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

            /*if (window.location.href.indexOf('installer/create') > -1) {


                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    address1Field = document.querySelector("#SearchAddress");
                    // address2Field = document.querySelector("#street_name");
                    // postalField = document.querySelector("#postcode");
                    // Create the autocomplete object, restricting the search predictions to
                    // addresses in the US and Canada.
                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    address1Field.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());

                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];

                        console.log("type"+componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);

                        switch (componentType) {

                            case "subpremise": {
                                $('#unit_number').val(component.long_name);
                            }

                            case "street_number": {
                                $('#street_number').val(component.long_name);
                            }

                            case "route": {
                                $('#street_name').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {
                                $('#state').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {
                                $('#postcode').val(component.short_name);
                            }

                        }

                        // switch (componentType) {
                        //     case "street_number": {
                        //         address1 = `${component.long_name} ${address1}`;
                        //         break;
                        //     }

                        //     case "route": {
                        //         address1 += component.short_name;
                        //         break;
                        //     }

                        //     case "postal_code": {
                        //         postcode = `${component.long_name}${postcode}`;
                        //         break;
                        //     }

                        //     case "postal_code_suffix": {
                        //         postcode = `${postcode}-${component.long_name}`;
                        //         break;
                        //     }
                        //     case "locality":
                        //         document.querySelector("#locality").value = component.long_name;
                        //         break;

                        //     case "administrative_area_level_1": {
                        //         document.querySelector("#state").value = component.short_name;
                        //         break;
                        //     }
                        //     case "country":
                        //         document.querySelector("#country").value = component.long_name;
                        //         break;
                        // }
                    }
                    // address1Field.value = address1;
                    // postalField.value = postcode;
                    // After filling the form with address components from the Autocomplete
                    // prediction, set cursor focus on the second address line to encourage
                    // entry of subpremise information such as apartment, unit, or floor number.
                    //address2Field.focus();
                }

            }





            // This sample uses the Places Autocomplete widget to:
            // 1. Help the user select a place
            // 2. Retrieve the address components associated with that place
            // 3. Populate the form fields with those address components.
            // This sample requires the Places library, Maps JavaScript API.
            // Include the libraries=places parameter when you first load the API.
            // For example: <script
            // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

            if (window.location.href.indexOf('job/create') > -1) {

                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {

                    // address1Field = document.querySelector("#SearchAddressone");
                    // autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('autocomplete2'), { types: [ 'geocode' ] });
                    autocomplete = new google.maps.places.Autocomplete(document.getElementById('SearchAddressone'), {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    document.getElementById('SearchAddressone').focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {

                    $("#SearchAddressdiv1").show();
                    $("#SearchAddressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];

                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);

                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber').val(component.long_name);
                            }

                            case "route": {

                                $('#StreetName').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode').val(component.short_name);
                            }

                        }

                    }

                }

            }*/
            /*
                if(window.location.href.indexOf('job') > -1)
                { 

                    let autocomplete_copy;
                    let address1Field_copy;
                    let address2Field_copy;
                    let postalField;

            function initAutocomplete() {

               // address1Field_copy = document.querySelector("#sameAsOwnerAddre_copy");
                //autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('autocomplete2'), { types: [ 'geocode' ] });
                
                autocomplete_copy = new google.maps.places.Autocomplete(document.getElementById('sameAsOwnerAddre_copy'), {
                    componentRestrictions: {
                        country: ["au"]
                    },
                    fields: ["address_components", "geometry"],
                    types: ["address"],
                });
                document.getElementById('sameAsOwnerAddre_copy').focus();
                // When the user selects an address from the drop-down, populate the
                // address fields in the form.
                autocomplete_copy.addListener("place_changed", fillInAddress);
            }

            function fillInAddress() {

                $("#SearchAddressdiv3").show();
                $("#SearchAddressdiv4").show();
                // Get the place details from the autocomplete object.
                const place = autocomplete.getPlace();
                let address1 = "";
                let postcode = "";


                // Get each component of the address from the place details,
                // and then fill-in the corresponding field on the form.
                // place.address_components are google.maps.GeocoderAddressComponent objects
                // which are documented at http://goo.gle/3l5i5Mr
                for (const component of place.address_components) {
                    const componentType = component.types[0];

                    console.log(componentType);
                    console.log(component.long_name);        
                    console.log(component.short_name);  

                    switch(componentType){
                        
                        case "subpremise":{
                            $('#UnitNumber').val(component.long_name);
                        }

                        case "street_number":{
                            $('#StreetNumber1').val(component.long_name);
                        }

                        case "route":{
                         
                            $('#StreetName1').val(component.short_name);
                        }

                        case "locality":{
                            $('#suburb').val(component.long_name);
                        }

                        case "administrative_area_level_1":{
                           
                            $('#State1').val(component.short_name).trigger('change');;
                        }

                        case "postal_code":{
                        
                            $('#PostCode1').val(component.short_name);
                        }

                    }      

                }
               
            }

                }
            */


            if (window.location.href.indexOf('register_technician') > -1) {
                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    address1Field = document.querySelector("#SearchAddress_sign");

                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    //address1Field.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    $("#addressdiv1").show();
                    $("#addressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#street_number').val(component.long_name);
                            }

                            case "route": {
                                $('#street_name').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#state').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#postcode').val(component.short_name);
                            }

                        }

                    }

                }

            }


            if (window.location.href.indexOf('company/create') > -1) {
                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    address1Field = document.querySelector("#SearchAddress_sign1");

                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    //address1Field.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    $("#addressdiv1").show();
                    $("#addressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#street_number').val(component.long_name);
                            }

                            case "route": {
                                $('#street_name').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#state').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#postcode').val(component.short_name);
                            }

                        }

                    }

                }

            }


            if (window.location.href.indexOf('/company/') > -1 && window.location.href.indexOf('/edit') > -1) {
                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    address1Field = document.querySelector("#SearchAddress_sign1");

                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    //address1Field.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    $("#addressdiv1").show();
                    $("#addressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#street_number').val(component.long_name);
                            }

                            case "route": {
                                $('#street_name').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#state').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#postcode').val(component.short_name);
                            }

                        }

                    }

                }

            }


 if (window.location.href.indexOf('job/edit') > -1){


                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
     
                    address1Field = document.querySelector("#SearchAddress_sign2");
                    address1Field1 = document.querySelector("#sameAsOwnerAddre_copy");
                   
                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });

                    autocomplete1 = new google.maps.places.Autocomplete(address1Field1, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });

                    //address1Field.focus();
                    //address1Field1.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                    autocomplete1.addListener("place_changed", fillInAddress1);
                }

                function fillInAddress() {
                    $("#SearchAddressdiv1").show();
                    $("#SearchAddressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber').val(component.long_name);
                            }

                            case "route": {
                                $('#StreetName').val(component.short_name);
                            }

                            case "locality": {
                                $('#Town').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode').val(component.short_name);
                            }

                        }

                    }

                }

                function fillInAddress1() {
                    $("#addressdiv3").show();
                    $("#addressdiv4").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete1.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber1').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber1').val(component.long_name);
                            }

                            case "route": {
                                $('#StreetName1').val(component.short_name);
                            }

                            case "locality": {
                                $('#Town1').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State1').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode1').val(component.short_name);
                            }

                        }

                    }

                }


            
}

            if (window.location.href.indexOf('job/create') > -1) {

                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    
                    address1Field = document.querySelector("#SearchAddress_sign2");
                    address1Field1 = document.querySelector("#sameAsOwnerAddre_copy");
                   
                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });

                    autocomplete1 = new google.maps.places.Autocomplete(address1Field1, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });

                    //address1Field.focus();
                    //address1Field1.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                    autocomplete1.addListener("place_changed", fillInAddress1);
                }

                function fillInAddress() {
                    $("#SearchAddressdiv1").show();
                    $("#SearchAddressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber').val(component.long_name);
                            }

                            case "route": {
                                $('#StreetName').val(component.short_name);
                            }

                            case "locality": {
                                $('#Town').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode').val(component.short_name);
                            }

                        }

                    }

                }

                function fillInAddress1() {
                    $("#addressdiv3").show();
                    $("#addressdiv4").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete1.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber1').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber1').val(component.long_name);
                            }

                            case "route": {
                                $('#StreetName1').val(component.short_name);
                            }

                            case "locality": {
                                $('#Town1').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State1').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode1').val(component.short_name);
                            }

                        }

                    }

                }


            }

            if (window.location.href.indexOf('/job/') > -1 && window.location.href.indexOf('/edit') > -1) {

                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
     
                    address1Field = document.querySelector("#SearchAddress_sign2");
                    address1Field1 = document.querySelector("#sameAsOwnerAddre_copy");
                   
                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });

                    autocomplete1 = new google.maps.places.Autocomplete(address1Field1, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });

                    //address1Field.focus();
                    //address1Field1.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                    autocomplete1.addListener("place_changed", fillInAddress1);
                }

                function fillInAddress() {
                    $("#SearchAddressdiv1").show();
                    $("#SearchAddressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber').val(component.long_name);
                            }

                            case "route": {
                                $('#StreetName').val(component.short_name);
                            }

                            case "locality": {
                                $('#Town').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode').val(component.short_name);
                            }

                        }

                    }

                }

                function fillInAddress1() {
                    $("#addressdiv3").show();
                    $("#addressdiv4").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete1.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber1').val(component.long_name);
                            }

                            case "street_number": {
                                $('#StreetNumber1').val(component.long_name);
                            }

                            case "route": {
                                $('#StreetName1').val(component.short_name);
                            }

                            case "locality": {
                                $('#Town1').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#State1').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#PostCode1').val(component.short_name);
                            }

                        }

                    }

                }


            }

            if (window.location.href.indexOf('installer/create') > -1) {
                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    address1Field = document.querySelector("#SearchAddress_sign3");

                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    address1Field.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    $("#addressdiv1").show();
                    $("#addressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#street_number').val(component.long_name);
                            }

                            case "route": {
                                $('#street_name').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#state').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#postcode').val(component.short_name);
                            }

                        }

                    }

                }

            }

            if (window.location.href.indexOf('/installer/') > -1 && window.location.href.indexOf('/edit') > -1) {
                let autocomplete;
                let address1Field;
                let address2Field;
                let postalField;

                function initAutocomplete() {
                    address1Field = document.querySelector("#SearchAddress_sign3");

                    autocomplete = new google.maps.places.Autocomplete(address1Field, {
                        componentRestrictions: {
                            country: ["au"]
                        },
                        fields: ["address_components", "geometry"],
                        types: ["address"],
                    });
                    //address1Field.focus();
                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener("place_changed", fillInAddress);
                }

                function fillInAddress() {
                    $("#addressdiv1").show();
                    $("#addressdiv2").show();
                    // Get the place details from the autocomplete object.
                    const place = autocomplete.getPlace();
                    $("#address_latitude").val(place.geometry.location.lat());
                    $("#address_longitude").val(place.geometry.location.lng());
                    console.log("lat is"+place.geometry.location.lat());
                    console.log("lng is"+place.geometry.location.lng());
                    let address1 = "";
                    let postcode = "";


                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    // place.address_components are google.maps.GeocoderAddressComponent objects
                    // which are documented at http://goo.gle/3l5i5Mr
                    for (const component of place.address_components) {
                        const componentType = component.types[0];
                        console.log(componentType);
                        console.log(component.long_name);
                        console.log(component.short_name);


                        switch (componentType) {

                            case "subpremise": {
                                $('#UnitNumber').val(component.long_name);
                            }

                            case "street_number": {
                                $('#street_number').val(component.long_name);
                            }

                            case "route": {
                                $('#street_name').val(component.short_name);
                            }

                            case "locality": {
                                $('#suburb').val(component.long_name);
                            }

                            case "administrative_area_level_1": {

                                $('#state').val(component.short_name).trigger('change');;
                            }

                            case "postal_code": {

                                $('#postcode').val(component.short_name);
                            }

                        }

                    }

                }

            }




            function reset_password_email() {
                var email = $('#email').val();
                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('password.email') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "email": email
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $("#btnFetch").prop("disabled", true);
                        $("#email").prop("disabled", true);
                        $("#btnFetch").html('<i class="fa fa-circle-o-notch fa-spin"></i> loading...');
                    },
                    success: function(data) {
                        $("#btnFetch").prop("disabled", false);
                        $("#btnFetch").html('Send Password Reset Link');
                        swal({
                            title: "Password Reset Successfull",
                            type: "success",
                            confirmButtonColor: '#f60e0e',
                        });
                        window.location.replace("{{url('/')}}/login");
                    },

                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#btnFetch").prop("disabled", false);
                        $("#btnFetch").html('Send Password Reset Link');
                        $("#email").val('');
                        var error = JSON.parse(XMLHttpRequest.responseText);
                        var err_text = "Something went wrong";
                        if (typeof error.errors.email[0] != "undefined") {
                            var err_text = error.errors.email[0];
                        }
                        swal({
                            title: err_text,
                            type: "error",
                            confirmButtonColor: '#f60e0e',
                        });

                    }
                });
            }

            function reset_password() {
                var token = $('#res_token').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var password_confirmation = $('#password-confirm').val();

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('password.update') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "token": token,
                        "email": email,
                        "password": password,
                        "password_confirmation": password_confirmation,
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $("#btnFetch").prop("disabled", true);
                        $("#email").prop("disabled", true);
                        $("#btnFetch").html('<i class="fa fa-circle-o-notch fa-spin"></i> loading...');
                    },
                    success: function(data) {
                        $("#btnFetch").prop("disabled", false);
                        $("#btnFetch").html('Send Password Reset Link');
                        swal({
                            title: "Password Reset Successfull",
                            type: "success",
                            confirmButtonColor: '#f60e0e',
                        });
                        window.location.replace("{{url('/')}}/logout");
                    },

                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $("#btnFetch").prop("disabled", false);
                        $("#btnFetch").html('Send Password Reset Link');
                        $("#email").val('');
                        var error = JSON.parse(XMLHttpRequest.responseText);
                        var err_text = "Something went wrong";
                        // if(typeof error.errors.email[0] != "undefined"){
                        //     var err_text =  error.errors.email[0];
                        // }
                        // swal({
                        //        title : err_text, 
                        //        type: "error",
                        //        confirmButtonColor: '#f60e0e',
                        //    });

                    }
                });
            }


            function update_company_status(obj, id) {
                var status = obj.is(':checked');
                if (status == true) {
                    $('#' + id).val(1);
                } else {
                    $('#' + id).val(0);
                }
            }

            function set_company_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('company.companyStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_role_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('role.roleStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_status_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('status.statusStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(downloadimage) {
                        alert('done');
                    }
                });

            }


            function set_manufacturer_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('manufacturer.manufacturerStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_model_status(id) {


                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('model.modelStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_supplier_status(id) {


                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('supplier.supplierStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }


            function set_installer_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('installer.installerStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_unverified_installer_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('unverified_installer.verified') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_job_status(id) {

                jQuery.ajax({
                    type: "POST",
                    url: "{{ route('job.jobStatus') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(data) {
                        alert('done');
                    }
                });

            }

            function set_installation_add(e) {

                $("#SearchAddressdiv3").show();
                $("#SearchAddressdiv4").show();

                $("#addressdiv3").show();
                $("#addressdiv4").show();

                if ($(e).is(":checked")) {
                    $('#PostalAddressType1').val($('#PostalAddressType').val());
                    $('#UnitType1').val($('#UnitType').val());
                    $('#UnitNumber1').val($('#UnitNumber').val());
                    $('#StreetNumber1').val($('#StreetNumber').val());
                    $('#StreetName1').val($('#StreetName').val());
                    $('#StreetType1').val($('#StreetType').val());
                    $('#Town1').val($('#Town').val());
                    $('#State1').val($('#State').val());
                    $('#PostCode1').val($('#PostCode').val());
                    $('#SearchAddress_inst').val($('#SearchAddressone').val());

                } else {
                    $("#SearchAddressdiv3").hide();
                    $("#SearchAddressdiv4").hide();
                    $('#PostalAddressType1').val('');
                    $('#UnitType1').val('');
                    $('#UnitNumber1').val('');
                    $('#StreetNumber1').val('');
                    $('#StreetName1').val('');
                    $('#StreetType1').val('');
                    $('#Town1').val('');
                    $('#State1').val('');
                    $('#PostCode1').val('');
                    $('#SearchAddress_inst').val('');

                }

            }

            function changeAddressType() {
                var address_type = $('#installer_address_type').val();
                if (address_type == 'Physical') {
                    $('.physical_address').show();
                    $('.postal_address').hide();
                } else {
                    $('.physical_address').hide();
                    $('.postal_address').show();
                }

            }

            function change_installer_job_type(jtype_obj) {
                $('.type1').prop("checked", false);
                $('.type2').prop("checked", false);
                $('.type_all').prop("checked", false);
                var jtype_id = jtype_obj.attr('id');
                //alert(jtype_id);
                var ischecked = jtype_obj.is(':checked');
                //alert(ischecked);
                if ($('#jtype1').is(':checked')) { // check if checkbox checked
                    $('.type1').show();
                    $('.type11').show();
                    $('.type2').hide();
                    $('.type22').hide();
                }
                if ($('#jtype2').is(':checked')) {
                    $('.type1').hide();
                    $('.type11').hide();
                    $('.type2').show();
                    $('.type22').show();
                }
                /*if ($('#jtype3').is(':checked')) {

                    $('.type1').show();
                    $('.type11').show();
                    $('.type2').show();
                    $('.type22').show();
                }/*/
                if ($('#jtype1').is(':checked') && $('#jtype2').is(':checked') || $('#jtype3').is(':checked')) {

                    $('.type1').show();
                    $('.type11').show();
                    $('.type2').show();
                    $('.type22').show();
                }
                if (!$('#jtype1').is(':checked') && !$('#jtype2').is(':checked')) {
                    $('.type1').show();
                    $('.type11').show();
                    $('.type2').show();
                    $('.type22').show();
                }
            }

            //code fot inventory cascading dropdown


            function fetch_model(manufacturer_id) {
                var manufacturerID = manufacturer_id;

                if (manufacturerID) {
                    $.ajax({
                        url: '{{url('inventory/model/')}}/' + manufacturerID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            $('#select_model').replaceWith(data);
                        }
                    });
                } else {
                    $('select[name="model"]').empty();
                }
            }

            function fetch_supplier(supplier_id) {
                var supplierID = supplier_id;
                if (supplierID) {
                    $.ajax({
                        url: '{{url('inventory/supplier/')}}/' + supplierID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            console.log("in supplier");
                            $('#select_supplier').replaceWith(data);
                        }
                    });
                } else {
                    $('select[name="select_supplier"]').empty();
                }
            }




    function generate_pdf(){

        th = 8.5 * 72;

        html2canvas(document.body, { 
            canvas:canvas,
            onrendered: function(canvas) {
                var iframe = document.createElement('iframe');
                iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:500px');
                document.body.appendChild(iframe);
                iframe.src = pdf.output('datauristring');   

           //var div = document.createElement('pre');
           //div.innerText=pdf.output();
           //document.body.appendChild(div);
       }
   });

    }






            //end of code for inventory cascading dropdown

            $(document).ready(function() {
                $(function() {
                    $('.nav_a').each(function() {
                        var a_tag = $(this).attr('id').replace('nav_', '');
                        var url = window.location.href;
                        var requested = a_tag.toLowerCase();
                        var matched = url.toLowerCase();
                        if (window.location.href.indexOf(requested) > -1) {
                            $('.nav_li').removeClass('current');
                            $(this).parents('li').addClass('current');
                        }

                    });
                });

                $('.phone').bind('keyup paste', function() {
                    this.value = this.value.replace(/[^0-9]/g, '');
                });

                $('#menu_button').click(function() {
                    var current_state = $('#current_state').val();
                    var app_url = $('#app_url').val();
                    var menu_state = $('#menu_state').val();

                    if (current_state == 'system') {
                        $('#current_state').val('mobile');
                        // var src = '/assets/images/circle-icon.png';
                        var src = 'assets/images/logo/TF-Logo.png';
                    } else {
                        $('#current_state').val('system');
                        var src = 'assets/images/logo/TF-logo-1.png';
                    }

                    var origin = window.location.origin;;
                    $('#user_image').attr('src', app_url + '/' + src);

                    if (menu_state == 'full') {
                        $('#menu_state').val('collapse');
                        $.cookie("menu_state", 'collapse');
                    } else {
                        $('#menu_state').val('full');
                        $.cookie("menu_state", 'full');
                    }

                });


                if ($("#unit_type").length > 0) {
                    $("#unit_type").select2({
                        placeholder: "Not a Unit",
                        allowClear: true
                    });
                }

                if ($("#street_type").length > 0) {
                    $("#street_type").select2({
                        placeholder: "Select a street type",
                        allowClear: true
                    });
                }

                if ($("#state").length > 0) {
                    $("#state").select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });
                }


                //start edit 21-09-2021 

                quick_search();
                quick_search_inverter();
                one_checkbox('.replacing_panels');
                one_checkbox('.Additionalpanels');
                one_checkbox('.system_installed');
            });


            function one_checkbox(selector){
                $(document).on('click', selector, function() {      
                    $(selector).not(this).prop('checked', false);      
                });
            }

            function quick_search(){
                $(".quick_search").on("keyup",function(){
                    var keyword = $(this).val();

                    var idd = $(this).attr("id");
                   
                    //console.log(keyword);
                    $.ajax({
                    url:"{{ route('job.quick_search') }}",
                    method:"POST",
                    data : { 
                        "_token": "{{ csrf_token() }}",
                        keyword : keyword },
                        success:function(data)
                        {
                            //console.log(data.length);
                            //if(data.length >0){  
                                autocomplete(document.getElementById(idd), data);
                                Brand_Model();
                            //}
                        }
                    });
                
                });
            }

            function autocomplete(inp, arr) {
                //console.log(arr);
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.addEventListener("input", function(e) {
                    var a, b, i, val = this.value;
                    /*close any already open lists of autocompleted values*/
                     closeAllLists();
                    if (!val) { return false;}
                    currentFocus = 0;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        //if (arr['search'].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        b.setAttribute("class", "search_watt");
                        b.setAttribute("data-watt", arr[i]['model_number']);
                        b.setAttribute("data-brand", arr[i]['LHAAN']);
                        b.setAttribute("search", arr[i]['search']);
                        b.innerHTML += arr[i]['search'] ; 
                        //b.innerHTML += "<span class='search_watt' data-watt='"+arr[i]['model_number']+"' data-brand='"+arr[i]['LHAAN']+"'>"+ arr[i]['search'] + "</span>"; 
                        a.appendChild(b);
                    
                    }
                });
                
            }
                /*execute a function presses a key on the keyboard:*/
                function closeAllLists(elmnt) {

                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != document.getElementById("install_date")) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                    }
                }
                document.addEventListener("click", function (e) {
                     closeAllLists(e.target);
                });
               
                function Brand_Model(){
                    $(".search_watt").on("click",function(){
                        var watt= $(this).attr("data-watt");
                        var brand= $(this).attr("data-brand");
                        var search= $(this).attr("search");
                        
                        //$(this).parent().parent().parent().siblings("div.Brand").css({"color": "red", "border": "2px solid red"});
                        
                        $(this).parent().siblings(".quick_search").val(search);
                        $(this).parent().parent().parent().siblings("div.Brand").find("select#Panels_Brand").html('<option value="">Select</option><option value="'+brand+'" selected>'+brand+'</option>');
                        $(this).parent().parent().parent().siblings("div.Model").find("select#Panels_Model").html('<option value="">Select</option><option value="'+watt+'" selected>'+watt+'</option>');
                    });
                }
            //End
            //start 22-09-2021
            function quick_search_inverter(){
                $(".quick_search_inverter").on("keyup",function(){
                    var keyword = $(this).val();
                    var id_in = $(this).attr("id");
                    $.ajax({
                    url:"{{ route('job.quick_search_inverter') }}",
                    method:"POST",
                    data : { 
                        "_token": "{{ csrf_token() }}",
                        keyword : keyword },
                        success:function(data)
                        {  
                                //console.log(data);
                                autocomplete_inverter(document.getElementById(id_in), data);
                                Brand_Series_Model();
                        }
                    });
                
                });
            }

            function autocomplete_inverter(inp, arr) {
                var currentFocus;
                inp.addEventListener("input", function(e) {
                    var a, b, i, val = this.value;
                     closeAllLists();
                    if (!val) { return false;}
                    currentFocus = 0;
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    this.parentNode.appendChild(a);
                    for (i = 0; i < arr.length; i++) {
                        b = document.createElement("DIV");
                        b.setAttribute("class", "search_inverter");
                        b.setAttribute("data-brand", arr[i]['brand']);
                        b.setAttribute("data-series", arr[i]['series']);
                        b.setAttribute("data-model", arr[i]['model']);
                        b.setAttribute("search", arr[i]['search']);
                        b.innerHTML += arr[i]['search'] ; 
                        a.appendChild(b);
                    }
                });   
            }
            function Brand_Series_Model(){
                $(".search_inverter").on("click",function(){
                    var brand = $(this).attr("data-brand");
                    var series= $(this).attr("data-series");
                    var model = $(this).attr("data-model");
                    var search= $(this).attr("search");

                    //$(this).parent().parent().parent().siblings("div.Brand").css({"color": "red", "border": "2px solid red"});
                    
                    $(this).parent().siblings(".quick_search_inverter").val(search);
                    $(this).parent().parent().parent().siblings("div.Brand").find("select#inverter_Brand").html('<option value="">Select</option><option value="'+brand+'" selected>'+brand+'</option>');
                    $(this).parent().parent().parent().siblings("div.Series").find("select#inverter_Series").html('<option value="">Select</option><option value="'+series+'" selected>'+series+'</option>');
                    $(this).parent().parent().parent().siblings("div.Model").find("select#inverter_Model").html('<option value="">Select</option><option value="'+model+'" selected>'+model+'</option>');
                });
            }







































            //end
            function change_current_menu(menu_link) {
                $(".menu li").removeClass("current");

                menu_link.addClass("current");
            }


            function loadImg() {
                $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
                $('#frame').css("border", "1px solid black");
                $('#frame').show();
            }

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });

            $("#imageUpload_logo").on('change', function(e) {
                $('#imagePreview_logo').css("background-image", "url(" + URL.createObjectURL(event.target.files[
                    0]) + ")");

            })

            $("#imageUpload_photo").on('change', function(e) {
                $('#imagePreview_photo').css("background-image", "url(" + URL.createObjectURL(event.target
                    .files[0]) + ")");
            })


            $("#imageUpload_license").on('change', function(e) {
                $('#imagePreview_license').css("background-image", "url(" + URL.createObjectURL(event.target
                    .files[0]) + ")");
            })

            $("#imageUpload_signature").on('change', function(e) {
                $('#imagePreview_signature').css("background-image", "url(" + URL.createObjectURL(event.target
                    .files[0]) + ")");
            })

            $("#imageUpload_identity").on('change', function(e) {
                $('#imagePreview_identity').css("background-image", "url(" + URL.createObjectURL(event.target
                    .files[0]) + ")");
            })

            function rated_power(){
                $("#Rated_Power_Output").val('');
                var nop = 0, formula_count = 0;
                var id= document.getElementsByName('enter_no_of_solar_panal[]');
                id.forEach(function(element) {
                    if(element.value != ''){
                    nop = parseInt(nop) + parseInt(element.value);
                    }    
                });
                //console.log(nop);
                formula_count = (300 * nop)/1000;
                //console.log(formula_count);
                if(formula_count != NaN && formula_count > 0){
                    $("#Rated_Power_Output").val(formula_count);
                }
            }   
            $(document).ready(function() {

                // Add new element
                $(".btn-copy").click(function() {

                    // Finding total number of elements added
                    var total_element = $(".element").length;
                    alert(total_element);
                    // last <div> with element class id
                    var lastid = $(".element:last").attr("id");
                    var split_id = lastid.split("_");
                    var nextindex = Number(split_id[1]) + 1;

                    var max = 5;
                    // Check total number elements
                    if (total_element < max) {
                        // Adding new div container after last occurance of element class
                        $(".element:last").after("<div class='element' id='div_" + nextindex +
                            "'></div>");

                        // Adding element to <div>
                        $("#div_" + nextindex).append(
                            "<input type='text' placeholder='Enter your skill' id='txt_" +
                            nextindex + "'>&nbsp;<span id='remove_" + nextindex +
                            "' class='remove'>X</span>");

                    }

                });


                 //Download Multiple image Ajax
                $(".imagedown").click(function() {
                   //var imagearray[];
                   var imagearray = [];
                    $(".imagedown").each(function() {
                        var id= $(this).attr("id");
                        //console.log(id);
                        //console.log('#'+id);
                        if ($('.'+id).is(':checked')) {
                            var checked = $('#'+id).attr("data-imagevalue");
                            imagearray.push(checked);

                          }  

                    });
                    console.log(imagearray);
                   $.ajax({
                    url:"{{ route('job.zipFileDownload') }}",
                    method:"GET",
                    data : { imagearray : imagearray },
                    success:function(data)
                    {
                        console.log(data);   
                    }
                });
                });

                //edit code 

                var chArray = new Array();

        	    $('.panel_image_save').change(function() {
        	    		var v = $(this).val();
        	        if(this.checked) {
        	        
        	        	
        	        		chArray.push(v);
        	         
        	        }else{
        	        	chArray=  $.grep(chArray, function(value) {
        	  					return value != v;
        						});
        	        }
	  		       //console.log(chArray); 
	    		});
        	    $("#panel_save_image").click(function(){
        	    	
        	    if(chArray.length  > 0){
        	        $.ajax({
                            url:"{{ route('job.zipFileDownload_new') }}",
                            method:"GET",
                            data : { chArray : chArray },
                            success:function(data)
                            {	
                            	var url= data.replace(/"/g," ")
                                window.open(url, "_blank");  
                            }
        	        });
	  			}else{
                    alert('Please select image');
                }

	  		   });
                //delete image
                $(".panel_delete").click(function(){
                    var id= $(this).attr("id");
                    $("#panel_delete_"+id).attr("value","0");
                    $(this).attr("value","Deleted");
                });
                $(".invetrers_delete").click(function(){
                    var id= $(this).attr("id");
                    $("#invetrers_delete_"+id).attr("value","0");
                    $(this).attr("value","Deleted");
                });



                $("#NMI").on('keyup',function() { 
                    var value= $(this).val();
                    if(value !=''){
                        $('#garn_div').removeClass("hidden");
                    }else{
                        $('#garn_div').addClass("hidden");
                    }
                }); 

                // Remove element
                $('.container').on('click', '.remove', function() {

                    var id = this.id;
                    var split_id = id.split("_");
                    var deleteindex = split_id[1];

                    // Remove <div> with id
                    $("#div_" + deleteindex).remove();

                });
            });


            </script>

</body>

</html>


</body>

</html>