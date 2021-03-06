<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    @include('scripttext.mandatorystyle')
    <!-- END  MANDATORY STYLE -->
    <!--begin page level style-->
    @include('scripttext.pagelevel')
    <!--end page level style-->
    <script src="{{ asset('/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>

<body data-page="blank_page">
    <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            @yield('navbar-center')
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    @include('scripttext.notificationdropdown')
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN MESSAGES DROPDOWN -->
                    @include('scripttext.messagesdropdown')
                    <!-- END MESSAGES DROPDOWN -->
                    <!-- BEGIN USER DROPDOWN -->
                    @include('scripttext.userdropdown')
                    <!-- END USER DROPDOWN -->

                    <!-- BEGIN CHAT HEADER -->
                    @include('scripttext.chatheader')
                    <!-- END CHAT HEADER -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        @yield('mainsidebar')
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        @yield('maincontent')
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN CHAT MENU -->
    @include('scripttext.chatmenu')
    <!-- END CHAT MENU -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    @include('scripttext.mandatoryscripts')
    <!-- END MANDATORY SCRIPTS -->
    <!--begin page level script-->
    @include('scripttext.pagelevelscript')
    <!--end page level script-->
    @include('Alerts::show')
    <script src="{{ asset('/assets/js/application.js') }}"></script>
</body>
</html>
