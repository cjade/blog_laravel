<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Documentation</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <!-- Logo -->
        <a href="assets/index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li><a href="http://almsaeedstudio.com">Almsaeed Studio</a></li>
                    <li><a href="http://almsaeedstudio.com/premium">Premium Templates</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="nav sidebar-menu">
                <li class="header">TABLE OF CONTENTS</li>
                <li class="active"><a href="#introduction"><i class="fa fa-circle-o"></i> Introduction</a></li>
                <li><a href="#download"><i class="fa fa-circle-o"></i> Download</a></li>
                <li><a href="#dependencies"><i class="fa fa-circle-o"></i> Dependencies</a></li>
                <li><a href="#advice"><i class="fa fa-circle-o"></i> Advice</a></li>
                <li><a href="#layout"><i class="fa fa-circle-o"></i> Layout</a></li>
                <li><a href="#adminlte-options"><i class="fa fa-circle-o"></i> Javascript Options</a></li>
                <li class="treeview" id="scrollspy-components">
                    <a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Components</a>
                    <ul class="nav treeview-menu">
                        <li><a href="#component-main-header">Main Header</a></li>
                        <li><a href="#component-sidebar">Sidebar</a></li>
                        <li><a href="#component-control-sidebar">Control Sidebar</a></li>
                        <li><a href="#component-info-box">Info Box</a></li>
                        <li><a href="#component-box">Boxes</a></li>
                        <li><a href="#component-direct-chat">Direct Chat</a></li>
                    </ul>
                </li>
                <li><a href="#plugins"><i class="fa fa-circle-o"></i> Plugins</a></li>
                <li><a href="#browsers"><i class="fa fa-circle-o"></i> Browser Support</a></li>
                <li><a href="#upgrade"><i class="fa fa-circle-o"></i> Upgrade Guide</a></li>
                <li><a href="#implementations"><i class="fa fa-circle-o"></i> Implementations</a></li>
                <li><a href="#faq"><i class="fa fa-circle-o"></i> FAQ</a></li>
                <li><a href="#license"><i class="fa fa-circle-o"></i> License</a></li>
            </ul>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h1>
                AdminLTE Documentation
                <small>Version 2.3</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Documentation</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content ">

            <section id="introduction">
                <h2 class="page-header"><a href="#introduction">Introduction</a></h2>
                <p class="lead">
                    <b>AdminLTE</b> is a popular open source WebApp template for admin dashboards and control panels.
                    It is a responsive HTML template that is based on the CSS framework Bootstrap 3.
                    It utilizes all of the Bootstrap components in its design and re-styles many
                    commonly used plugins to create a consistent design that can be used as a user
                    interface for backend applications. AdminLTE is based on a modular design, which
                    allows it to be easily customized and built upon. This documentation will guide you through
                    installing the template and exploring the various components that are bundled with the template.
                </p>
            </section><!-- /#introduction -->


            <!-- ============================================================= -->

            <section id="download">
                <h2 class="page-header"><a href="#download">Download</a></h2>
                <p class="lead">
                    AdminLTE can be downloaded in two different versions, each appealing to different skill levels and use case.
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Ready</h3>
                                <span class="label label-primary pull-right"><i class="fa fa-html5"></i></span>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <p>Compiled and ready to use in production. Download this version if you don't want to customize AdminLTE's LESS files.</p>
                                <a href="http://almsaeedstudio.com/download/AdminLTE-dist" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Source Code</h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <p>All files including the compiled CSS. Download this version if you plan on customizing the template. <b>Requires a LESS compiler.</b></p>
                                <a href="http://almsaeedstudio.com/download/AdminLTE" class="btn btn-danger"><i class="fa fa-download"></i> Download</a>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <pre class="hierarchy bring-up"><code class="language-bash" data-lang="bash">File Hierarchy of the Source Code Package

AdminLTE/
├── dist/
│   ├── CSS/
│   ├── JS
│   ├── img
├── build/
│   ├── less/
│   │   ├── AdminLTE's Less files
│   └── Bootstrap-less/ (Only for reference. No modifications have been made)
│       ├── mixins/
│       ├── variables.less
│       ├── mixins.less
└── plugins/
    ├── All the customized plugins CSS and JS files</code></pre>
            </section>


            <!-- ============================================================= -->



            <!-- ============================================================= -->

            <section id="license">
                <h2 class="page-header"><a href="#license">License</a></h2>
                <h3>AdminLTE</h3>
                <p class="lead">
                    AdminLTE is an open source project that is licensed under the <a href="http://opensource.org/licenses/MIT">MIT license</a>.
                    This allows you to do pretty much anything you want as long as you include
                    the copyright in "all copies or substantial portions of the Software."
                    Attribution is not required (though very much appreciated).
                </p>
            </section>


        </div><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

    {{--<!-- Control Sidebar -->--}}
    {{--<aside class="control-sidebar control-sidebar-dark">--}}
        {{--<!-- Create the tabs -->--}}
        {{--<div class="pad">--}}
            {{--This is an example of the control sidebar.--}}
        {{--</div>--}}
    {{--</aside><!-- /.control-sidebar -->--}}
    {{--<!-- Add the sidebar's background. This div must be placed--}}
         {{--immediately after the control sidebar -->--}}
    {{--<div class="control-sidebar-bg"></div>--}}

</div><!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<script src="docs.js"></script>
</body>
</html>
