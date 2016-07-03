<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Register Page | Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="{{asset('images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('images/favicon/mstile-144x144.png')}}">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->

    <link href="{{asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{asset('css/custom/custom.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('css/layouts/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="{{asset('js/plugins/jquery.nestable/nestable.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">

    <link href="{{asset('js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="{{asset('js/plugins/fullcalendar/css/fullcalendar.min.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">


    <link href="{{asset('js/plugins/ionRangeSlider/css/ion.rangeSlider.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
    <!--Flat Skin-->
    <link href="{{asset('js/plugins/ionRangeSlider/css/ion.rangeSlider.skinFlat.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
    <!--jsgrid css-->
    <link href="{{asset('js/plugins/jsgrid/css/jsgrid.min.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="{{asset('js/plugins/jsgrid/css/jsgrid-theme.min.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">


    @yield('head')

</head>

<body class="cyan">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

@yield('content')


{{--================================================ --}}
{{--                    Scripts                      --}}
{{--================================================ --}}

<!-- jQuery Library -->
<script type="text/javascript" src="{{asset('js/plugins/jquery-1.11.2.min.js')}}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<!--angularjs-->
<script type="text/javascript" src="{{asset('js/plugins/angular.min.js')}}"></script>
<!--prism-->
<script type="text/javascript" src="{{asset('js/plugins/prism/prism.js')}}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{asset('js/plugins.min.js')}}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>

<!-- sparkline -->
<script type="text/javascript" src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/sparkline/sparkline-script.js')}}"></script>

<!-- chartist -->
<script type="text/javascript" src="{{asset('js/plugins/chartist-js/chartist.min.js')}}"></script>

<!--editabletable-->
<script type="text/javascript" src="{{asset('js/plugins/editable-table/mindmup-editabletable.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/editable-table/numeric-input-example.js')}}"></script>
<!-- data-tables -->
<script type="text/javascript" src="{{asset('js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/data-tables/data-tables-script.js')}}"></script>
<!--floatThead -->
<script type="text/javascript" src="{{asset('js/plugins/floatThead/jquery.floatThead.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/floatThead/jquery.floatThead-slim.min.js')}}"></script>
<!--sweetalert -->
<script type="text/javascript" src="{{asset('js/plugins/sweetalert/sweetalert.min.js')}}"></script>

<!-- Calendar Script -->
<script type="text/javascript" src="{{asset('js/plugins/fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/fullcalendar/lib/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/fullcalendar/fullcalendar-script.js')}}"></script>

<script type="text/javascript">
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#textAreaEditor').editableTableWidget({editor: $('<textarea>')});
    window.prettyPrint && prettyPrint();
</script>
<script type="text/javascript">
    /*Show entries on click hide*/
    $(document).ready(function () {
        $(".dropdown-content.select-dropdown li").on("click", function () {
            var that = this;
            setTimeout(function () {
                if ($(that).parent().hasClass('active')) {
                    $(that).parent().removeClass('active');
                    $(that).parent().hide();
                }
            }, 100);
        });
    });
</script>


@yield('footer')
</body>
</html>
