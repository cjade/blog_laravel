@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->

                <div class="box  box-success">
                    <div class="box-header">
                        <br>

                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>100000</h3>

                                    <p>用户总数</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-gear-a"></i>
                                </div>
                                <a href="javascript:void(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>100000000</h3>

                                    <p>浏览量</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-windows"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>1000000</h3>

                                    <p>文章</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-credit-card fa-lg"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>5.6.35</h3>

                                    <p>MYSQL版本</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="panel panel-success">
                                    <div class="callout callout-info" style="margin-bottom: 0px">
                                        <i class="fa fa-cogs"></i> 系统信息
                                    </div>
                                    <div class="panel-body callout " style="margin-bottom: 0px;background-color: #39CCCC;">
                                        <p><i class="fa fa-cog"></i> 操作系统：{{PHP_OS}}                       </p>
                                        <p><i class="fa fa-sitemap"></i> 框架版本：{{config('sys.FRAMEWORK_VERSION')}}                       </p>
                                        <p><i class="fa fa-windows"></i> 服务环境：{{$_SERVER["SERVER_SOFTWARE"]}}                       </p>
                                        <p><i class="fa fa-vine"></i> 程序版本：{{config('sys.PROGRAM_VERSION')}}                       </p>

                                        <p><i class="fa fa-credit-card"></i> PHP 版本：{{PHP_VERSION}}                        </p>
                                        <p><i class="fa fa-vimeo-square"></i> MySQL 版本：{{$mysql_version}}                        </p>
                                        <p><i class="fa fa-warning"></i> 上传附件限制：{{ini_get('upload_max_filesize')}}                        </p>
                                        <p><i class="fa fa-cube"></i> 剩余空间：{{round((@disk_free_space(".") / (1024 * 1024)), 2) . 'M'}}                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="callout callout-success" style="margin-bottom: 0px">
                                        <i class="fa fa-group"></i> 发起团队
                                    </div>
                                    <div class="panel-body callout" style="margin-bottom: 0px;background-color: #3c8dbc;">
                                        <p><i class="fa fa-send-o"></i> 博客：<a href="http://tcina.com" target="_blank">http://tcina.com</a>
                                        </p>
                                        <p><i class="fa fa-qq"></i> QQ：862226994
                                        </p>
                                        <p><i class="fa fa-user"></i> 团队成员：Jason&nbsp;
                                        </p>
                                        <p><i class="fa fa-envelope-o"></i> 联系邮箱：862226994@qq.com
                                        <p>
                                            &nbsp;
                                        </p>
                                        <p>
                                            &nbsp;
                                        </p>
                                        <p>
                                            &nbsp;
                                        </p>
                                        <p>
                                            &nbsp;
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
@stop

