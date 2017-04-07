<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Data Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- 头部 -->
    @include('admin.layouts.header')

    <!-- 左侧菜单 -->
    @include('admin.layouts.menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                首页
                <small></small>
            </h1>
            <ol class="breadcrumb" id="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" >
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box  box-success">
                        <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                </tr>









                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.1
        </div>
        <strong>Copyright © 2016 - 2020  <a href="http://tcina.com">星辰开发维护团队</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(document).ready(function() {
        var height= '525';
        /**
         * 自动适配面包屑导航
         */
        $('body').on('click', '.menuChild', function() {
            height = $(window).height();
            $('.menuChild').removeClass('active');
            $(this).addClass('active');
            var parentName = $.trim($(this).parent().prev().text());
            var ownName = $(this).children('a').text();
            var breadcrumb = $('#breadcrumb');
            breadcrumb.html('<li><a href=""><i class="fa fa-dashboard"></i>首页</a></li>');
            breadcrumb.append('<li>'+ parentName +'</li><li class="active">'+ ownName +'</li>');
            breadcrumb.prev().text(ownName);


        });
        /**
         *滚动区域高度
         */
        $("#content").slimScroll({
            height: height+'px'
        });
        /**
         * 表格
         */
        $('#example').dataTable( {
            "oLanguage": {
                "sLengthMenu": "每页显示 _MENU_ 条记录",
                "sZeroRecords": "抱歉， 没有找到",
                "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                "sInfoEmpty": "没有数据",
                "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                "oPaginate": {
                    "sFirst": "首页",
                    "sPrevious": "前一页",
                    "sNext": "后一页",
                    "sLast": "尾页"
                },
                "sZeroRecords": "没有检索到数据",
                "sProcessing": "<img src='assets/dis/img/loading.gif' />",

            },

        });





    } );
</script>
</body>
</html>
