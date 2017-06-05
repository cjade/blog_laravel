@extends('admin.layouts.app')
@section('title','文章列表')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                文章列表
                <small></small>
            </h1>
            <ol class="breadcrumb" id="breadcrumb">
                <li><a href="index"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li><a href="#">文章管理</a></li>
                <li class="active">文章列表</li>
            </ol>
        </section>
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box  box-success">
                        <div class="box-header">
                            <br>

                            <table id="table"
                                   data-toggle="table"
                                   data-toolbar="#toolbar"
                                   data-search="true"
                                   data-show-refresh="true"
                                   data-show-columns="true"
                                   data-show-export="true"
                                   data-detail-view="true"
                                   data-detail-formatter="detailFormatter"
                                   data-minimum-count-columns="2"
                                   data-show-pagination-switch="true"
                                   data-pagination="true"
                                   data-id-field="id"
                                   data-page-list="[10, 25, 50, 100, ALL]"
                                   data-show-footer="false"
                                   data-side-pagination="server"
                                   data-response-handler="responseHandler">
                                <thead>
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Item 1</td>
                                    <td>$1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Item 2</td>
                                    <td>$2</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>




                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
    </div>
@stop

@section('script')

    <script type="text/javascript">

    </script>
@stop