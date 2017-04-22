<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>星辰Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->

    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="assets/index2.html"><b>星辰</b>Admin</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" id="app">

        <p class="login-box-msg">
            <span class="label label-info">请填写您的账号和密码（test@test.com/111111）</span>
        </p>
        {{--<el-form ref="form" :model="form" :rules="rules" label-width="80px">--}}
            {{--<div class="form-group has-feedback">--}}
                {{--<el-input v-model="form.email" class="form-control" placeholder="Email"></el-input>--}}
                {{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
    {{--</div>--}}
                {{--<el-input v-model="form.password" type="password" class="form-control" placeholder="Password"></el-input>--}}
        {{--</el-form>--}}
        <el-form :model="ruleForm" :rules="rules" ref="ruleForm" v-loading="loading" class="demo-ruleForm">
        {{--<form action="" method="post">--}}
            {{--<input  name="_token" type="hidden" value="{{ csrf_token() }}">--}}
            {{--<div class="form-group has-feedback">--}}
            <el-form-item   prop="email">
                <el-input v-model="ruleForm.email" type="email" class="has-feedback form-group"  placeholder="Email"></el-input>
                {{--<input type="email" v-model="email"  class="form-control" placeholder="Email">--}}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </el-form-item>

            <el-form-item  prop="password">
                <el-input v-model="ruleForm.password" type="password" class="has-feedback form-group" placeholder="Password "></el-input>
                {{--<input type="email" v-model="email"  class="form-control" placeholder="Email">--}}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </el-form-item>
            {{--</div>--}}
            {{--<div class="form-group has-feedback">--}}
                {{--<input type="password"  v-model="password" class="form-control" placeholder="Password">--}}
                {{--<span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-8">--}}
                    {{--<div class="checkbox icheck">--}}
                        {{--{!! Geetest::render() !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- /.col -->
            <el-form-item>
                <el-button type="primary" @click="submitForm('ruleForm')">Sign In</el-button>
                <el-button @click="resetForm('ruleForm')">重置</el-button>
            </el-form-item>
                {{--<div class="col-xs-4">--}}
                    {{--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
                    {{--<el-button @click="onSubmit()" type="primary" class="btn btn-primary btn-block btn-flat">Sign In</el-button>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<el-button @click="visible = true">按钮</el-button>--}}
                    {{--<el-dialog v-model="visible" title="Hello world">--}}
                        {{--<p>欢迎使用 Element</p>--}}
                    {{--</el-dialog>--}}
                {{--</div>--}}
                <!-- /.col -->
            {{--</div>--}}
        {{--</form>--}}
        </el-form>
        {{--<div class="social-auth-links text-center">--}}
            {{--<p>- OR -</p>--}}
            {{--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using--}}
                {{--Facebook</a>--}}
            {{--<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using--}}
                {{--Google+</a>--}}
        {{--</div>--}}

        <!-- /.social-auth-links -->

        {{--<a href="#">I forgot my password</a><br>--}}
        {{--<a href="register.html" class="text-center">Register a new membership</a>--}}
    </div>

    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
{{--<script src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
<!-- iCheck -->
{{--<script src="assets/plugins/iCheck/icheck.min.js"></script>--}}


<script src="https://unpkg.com/vue/dist/vue.js"></script>
<!-- 引入组件库 -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/admin/login.js"></script>
<style>
    .form-group{
        margin-top: 10px;
        margin-bottom: 0px;
    }
    .form-control-feedback{
        top:10px;
    }
    .el-form-item__content{
        text-align: center;
    }
</style>

</body>
</html>
