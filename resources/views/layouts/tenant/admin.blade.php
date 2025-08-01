<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured Gym membership software">
    <meta name="author" content="Joseph Mtinangi">

    <link rel="shortcut icon" href="assets/images/favicon.ico') }}">

    <title>@yield('title') | {{ tenant('id') }}</title>

    <link href="{{ asset('tenant/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ asset('tenant/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ asset('tenant/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />    

    <link href="{{ asset('tenant/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('tenant/js/modernizr.min.js') }}"></script>


</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="{{ route('tenant.dashboard.index') }}" class="logo"><i class="icon-magnet icon-c-logo"></i><span>EGYM</span></a>
                    <!-- Image Logo here -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item notification-list">
                        <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                            <i class="dripicons-expand noti-icon"></i>
                        </a>
                    </li>

                    <li class="list-inline-item notification-list">
                        <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                            <i class="dripicons-message noti-icon"></i>
                        </a>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="user" class="rounded-circle"> {{ auth()->user()->member->first_name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="md md-account-circle"></i> <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="md md-settings"></i> <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="md md-lock-open"></i> <span>Lock Screen</span>
                        </a>

                        <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                        <i class="md md-settings-power"></i> <span>Logout</span>
                    </a>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>

    </nav>

</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="{{ route('tenant.dashboard.index') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Members </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('members.create') }}">Register New</a></li>
                        <li><a href="{{ route('members.index') }}">List All</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Instructors </span> <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('instructors.create') }}">Register New</a></li>
                        <li><a href="{{ route('instructors.index') }}">List All</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i><span>Settings </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><span>Rates</span>  <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('membership-plans.index') }}"><span>List All</span></a></li>
                                <li><a href="{{ route('membership-plans.create') }}"><span>Add New</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            @yield('content')


        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        &copy; 2021. All rights reserved.
    </footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar nicescroll">
    <h4 class="text-center">Chat</h4>
    <div class="contact-list nicescroll">
        <ul class="list-group contacts-list">
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Chadengle</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Tomaslau</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Stillnotdavid</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Kurafire</span>
                    <i class="fa fa-circle online"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Shahedk</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Adhamdannaway</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Ok</span>
                    <i class="fa fa-circle away"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Arashasghari</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Joshaustin</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('tenant/images/avatar.png') }}" alt="">
                    </div>
                    <span class="name">Sortino</span>
                    <i class="fa fa-circle offline"></i>
                </a>
                <span class="clearfix"></span>
            </li>
        </ul>
    </div>
</div>
<!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('tenant/js/jquery.min.js') }}"></script>
<script src="{{ asset('tenant/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
<script src="{{ asset('tenant/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('tenant/js/detect.js') }}"></script>
<script src="{{ asset('tenant/js/fastclick.js') }}"></script>
<script src="{{ asset('tenant/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('tenant/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('tenant/js/waves.js') }}"></script>
<script src="{{ asset('tenant/js/wow.min.js') }}"></script>
<script src="{{ asset('tenant/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('tenant/js/jquery.scrollTo.min.js') }}"></script>

<!-- Sweet-Alert  -->
<script src="{{ asset('tenant/js/sweetalert2.min.js') }}"></script>

<script src="{{ asset('tenant/js/jquery.core.js') }}"></script>
<script src="{{ asset('tenant/js/jquery.app.js') }}"></script>

@if(session()->has('successMessage'))
<script type="text/javascript">
    swal(
    {
        title: 'Good job!',
        text: "{{ session()->get('successMessage') }}",
        type: 'success',
        confirmButtonColor: '#4fa7f3'
    }
    )
</script>
@endif  

@if(session()->has('errorMessage'))
<script type="text/javascript">
    swal(
    {
        title: 'Whoops!',
        text: "{{ session()->get('errorMessage') }}",
        type: 'danger',
        confirmButtonColor: '#4fa7f3'
    }
    )
</script>
@endif

<script src="{{ asset('tenant/js/moment.min.js') }}"></script>

<script src="{{ asset('tenant/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('tenant/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('tenant/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('tenant/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('tenant/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('tenant/js/jszip.min.js') }}"></script>
<script src="{{ asset('tenant/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('tenant/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('tenant/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('tenant/js/buttons.print.min.js') }}"></script>

@stack('scripts')

<script type="text/javascript">
    $(document).ready(function() {

                // Date Picker
                jQuery('.datepicker').datepicker();
                jQuery('.datepicker-autoclose').datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose: true,
                    todayHighlight: true
                });       

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf'],
                    ordering: false
                });

                table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );
        </script>

    </body>
    </html>