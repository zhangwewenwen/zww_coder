
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/sb-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/sb-admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Coder 管理后台</a>
        </div>
        <!-- /.navbar-header -->

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{url('/manager')}}"><i class="fa fa-table fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> admin team and member<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/manager/team"><i class="fa fa-dashboard fa-fw"></i> Our Team_menber</a>
                            </li>
                            <li>
                                <a href="/manager/member"><i class="fa fa-dashboard fa-fw"></i>working members</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{url('/manager/message_board')}}"><i class="fa fa-edit fa-fw"></i> Message_board</a>
                    </li>
                    <li>
                        <a href="{{url('/manager/milestones')}}"><i class="fa fa-wrench fa-fw"></i>Milestones<span class="fa arrow"></span></a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{url('/manager/projects')}}"><i class="fa fa-sitemap fa-fw"></i>Projects<span class="fa arrow"></span></a>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{url('/manager/Aregister')}}"><i class="fa fa-files-o fa-fw"></i> Register<span class="fa arrow"></span></a>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        @section('content')

            @show
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/sb-admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/sb-admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/sb-admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/sb-admin/vendor/raphael/raphael.min.js"></script>
<script src="/sb-admin/vendor/morrisjs/morris.min.js"></script>
<script src="/sb-admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/sb-admin/dist/js/sb-admin-2.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</body>

</html>
