<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
    <link href="bootstrap/css/background.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/print.css" rel="stylesheet" media="print">			
    <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">				
    <link href="bootstrap/css/bootstrap.min1.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/sb_admin.css" rel="stylesheet" media="screen">

    <!-- calendar css -->
    <script src="bootstrap/js/html5.js"></script>
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- data table -->
    <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <!-- notification  -->
    <link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <!-- wysiwug  -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>

    <script src="vendors/jGrowl/jquery.jgrowl.js"></script>
    <style>
        #bs6 {
          max-width: 228px;
          margin: 0px 0 0;
          padding: 0;
          background-color: #fff;
          -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
          -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
          box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
        }
    
        #bs6>li>a {
          display: block;
          width: 190px \9;
          margin: 0 0 -1px;
          padding: 8px 14px;
          border: 1px solid #e5e5e5;
          text-decoration: none;
        }
    
        #bs6>li:first-child>a {}
    
        #bs6>li:last-child>a {}
    
        #bs6>.active>a {
          position: relative;
          z-index: 2;
          padding: 9px 15px;
          border: 0;
          text-shadow: 0 1px 0 rgba(0, 0, 0, .15);
          -webkit-box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
          -moz-box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
          box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
        }
    
        /* Chevrons */
        #bs6 .icon-chevron-right {
          float: right;
          margin-top: 2px;
          margin-right: -6px;
          opacity: .25;
        }
    
        #bs6>li>a:hover {
          background-color: #f5f5f5;
        }
    
        #bs6 a:hover .icon-chevron-right {
          opacity: .5;
        }
    
        #bs6 .active .icon-chevron-right,
        #bs6.active a:hover .icon-chevron-right {
          opacity: 1;
        }
    
        #bs6.affix {
          top: 40px;
        }
    
        #bs6.affix-bottom {
          position: absolute;
          top: auto;
          bottom: 270px;
        }
    
        #bs5 {
          max-width: 228px;
          margin: 0px 0 0;
          padding: 0;
          background-color: #fff;
          -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
          -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
          box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
        }
    
        #bs5>li>a {
          display: block;
          width: 190px \9;
          margin: 0 0 -1px;
          padding: 8px 14px;
          border: 1px solid #e5e5e5;
          text-decoration: none;
        }
    
        #bs5>li:first-child>a {}
    
        #bs5>li:last-child>a {}
    
        #bs5>.active>a {
          position: relative;
          z-index: 2;
          padding: 9px 15px;
          border: 0;
          text-shadow: 0 1px 0 rgba(0, 0, 0, .15);
          -webkit-box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
          -moz-box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
          box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
        }
    
        /* Chevrons */
        #bs5 .icon-chevron-right {
          float: right;
          margin-top: 2px;
          margin-right: -6px;
          opacity: .25;
        }
    
        #bs5>li>a:hover {
          background-color: #f5f5f5;
        }
    
        #bs6 a:hover .icon-chevron-right {
          opacity: .5;
        }
    
        #bs5 .active .icon-chevron-right,
        #bs5.active a:hover .icon-chevron-right {
          opacity: 1;
        }
    
        #bs5.affix {
          top: 40px;
        }
    
        #bs5.affix-bottom {
          position: absolute;
          top: auto;
          bottom: 270px;
        }
    
    
        #bs7 {
          max-width: 228px;
          margin: 0px 0 0;
          padding: 0;
          background-color: #fff;
          -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
          -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
          box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
        }
    
        #bs7>li>a {
          display: block;
          width: 190px \9;
          margin: 0 0 -1px;
          padding: 8px 14px;
          border: 1px solid #e5e5e5;
          text-decoration: none;
        }
    
        #bs7>li:first-child>a {}
    
        #bs7>li:last-child>a {}
    
        #bs7>.active>a {
          position: relative;
          z-index: 2;
          padding: 9px 15px;
          border: 0;
          text-shadow: 0 1px 0 rgba(0, 0, 0, .15);
          -webkit-box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
          -moz-box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
          box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1), inset -1px 0 0 rgba(0, 0, 0, .1);
        }
    
        /* Chevrons */
        #bs7 .icon-chevron-right {
          float: right;
          margin-top: 2px;
          margin-right: -6px;
          opacity: .25;
        }
    
        #bs7>li>a:hover {
          background-color: #f5f5f5;
        }
    
        #bs7 a:hover .icon-chevron-right {
          opacity: .5;
        }
    
        #bs7 .active .icon-chevron-right,
        #bs7.active a:hover .icon-chevron-right {
          opacity: 1;
        }
    
        #bs7.affix {
          top: 40px;
        }
    
        #bs7.affix-bottom {
          position: absolute;
          top: auto;
          bottom: 270px;
        }
    </style>
    <link href="bootstrap/css/admin_background.css" rel="stylesheet" media="screen" />
</head>
<body>
    @include('admin.navbar')
    @yield('content')
    
    @include('admin.scripts')
</body>
</html>