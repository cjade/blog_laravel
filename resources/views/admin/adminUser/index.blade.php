@extends('admin.layouts.app')
@section('title','管理员列表')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                管理员列表
                <small></small>
            </h1>
            <ol class="breadcrumb" id="breadcrumb">
                <li><a href="index"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li><a href="#">管理员管理</a></li>
                <li class="active">管理员列表</li>
            </ol>
        </section>
        <section class="content" id="app">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box  box-success">
                        <div class="box-header">
                            <br>

                            <el-table
                                    v-loading="loading"
                                    element-loading-text="拼命加载中"
                                    :data="tableData"
                                    height="450"
                                    style="width: 100%"
                                    :row-class-name="tableRowClassName">
                                <el-table-column type="expand">
                                    <template scope="props">
                                        <el-form label-position="left" inline class="demo-table-expand">
                                            <el-form-item label="管理员id">
                                                <span>@{{ props.row.user_id }}</span>
                                            </el-form-item>
                                            <el-form-item label="商品 ID">
                                                <span>@{{ props.row.user_id }}</span>
                                            </el-form-item>
                                            <el-form-item label="店铺地址">
                                                <span>@{{ props.row.nickname }}</span>
                                            </el-form-item>
                                        </el-form>
                                    </template>
                                </el-table-column>

                                <el-table-column
                                        prop="nickname"
                                        label="姓名"
                                        fixed
                                        width="160">
                                </el-table-column>
                                <el-table-column
                                        prop="user_email"
                                        label="邮箱">
                                </el-table-column>
                                <el-table-column
                                        prop="created_at"
                                        label="创建时间"
                                        :formatter="dateFormat"
                                        width="180">
                                </el-table-column>

                                <el-table-column label="操作">
                                    <template scope="scope">
                                        <el-button
                                                size="small"
                                        @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
                                        <el-button
                                                size="small"
                                                type="danger"
                                        @click="handleDelete( scope.$index,scope.row)">删除</el-button>
                                    </template>
                                </el-table-column>
                            </el-table>

                        </div>
                        <div class="box-footer clearfix" style="text-align: right;">
                            <el-pagination v-bind:current-Page="pageIndex" v-bind:page-size="pageSize" :total="total"
                                           layout="total,sizes,prev,pager,next,jumper" v-bind:page-sizes="pageSizes"
                                           v-on:size-change="sizeChange" v-on:current-change="pageIndexChange">

                            </el-pagination>
                        </div>



                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
    </div>
@stop

@section('script')
    <style>
        .el-table .info-row {
            background: #c9e5f5;
        }

        .el-table .positive-row {
            background: #e2f0e4;
        }
        .demo-table-expand {
            font-size: 0;
        }
        .demo-table-expand label {
            width: 90px;
            color: #99a9bf;
        }
        .demo-table-expand .el-form-item {
            margin-right: 0;
            margin-bottom: 0;
            width: 50%;
        }
        .el-table__expanded-cell {
            padding: 20px 200px;
            background-color: #fbfdff;
            box-shadow: inset 0 2px 0 #f4f4f4;
        }
    </style>
    <script>
        new Vue({
            el: '#app',
            data: function(){
                return {
                    loading: false,
                    total: 0,//共多少条
                    pageSize: 10,//每页显示条数
                    pageIndex: 0,
                    pageSizes: [10, 20, 50, 100],
                    tableData: []
                }
            },
            created: function () {
                this.getData();
            },watch: {},
            methods: {
                tableRowClassName(row, index) {
                    if(index%2 ==1){
                        return 'info-row';
                    } else {
                        return 'positive-row';
                    }
                    return '';
                },
                getData: function () {
                    let _this = this;
                    _this.loading = true;
                    axios.get("{{route('admin-user')}}" , {
                        params: {
                            rows : _this.pageSize,
                            page:_this.pageIndex
                        }
                    }).then(function (response) {
                        let res = response.data;
                        console.log(response);
                        if (res != false) {
                            _this.tableData = res.data;
                            _this.total = res.total;
                            _this.currentPage = res.current_page;
                            _this.loading = false;
                        } else {
                            _this.$message({
                                message: '数据获取失败',
                                type: 'error',
                                duration: 3 * 1000
                            });
                        }
                    }).catch(function (error) {
                        console.log(error);
                    });
                },
                //修改没有显示数
                sizeChange: function (pageSize) {
                    this.pageSize = pageSize;
                    this.getData();
                },
                pageIndexChange: function (pageIndex) {
                    this.pageIndex = pageIndex;
                    this.getData();
                },
                handleEdit(index, row) {
                    alert(row.user_id);
                },
                //删除
                handleDelete(index,row) {
                    console.log(index);
                    let _this = this;
                    _this.$confirm('确认删除该记录吗?', '提示', {
                        //type: 'warning'
                    }).then(() => {
                        _this.loading = true;
                    axios.delete('admin-userDel', {
                        params: {
                            id : row.user_id,
                        }

                    }).then(function (response) {
                        _this.loading = false;
                        let res = response.data;
                        console.log(res);
                        if(res.status == 'success'){
                            _this.$message({
                                message: '删除成功!',
                                type: 'success',
                            });
                            _this.tableData.splice(index, 1);;
                        }else {
                            _this.$message({
                                message: '删除失败!',
                                type: 'error'
                            });
                        }



                    }).catch(function (error) {
                        console.log(error);
                    });
                }).catch(() => {
                        _this.Loading = false;
                });
                },
                //时间格式化
                dateFormat:function(row, column) {
                    var date = row[column.property];
                    if (date == undefined) {
                        return "";
                    }
                    return moment(date).format("YYYY-MM-DD HH:mm:ss");
                }
            }

        })
    </script>
@stop