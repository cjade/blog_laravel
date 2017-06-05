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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->

    <!-- 引入组件库 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/element-ui/1.2.9/theme-default/index.css">
    <script src="//cdn.bootcss.com/vue/2.2.6/vue.min.js"></script>
    <script src="//cdn.bootcss.com/element-ui/1.2.9/index.js"></script>
    <script src="//cdn.bootcss.com/axios/0.16.1/axios.min.js"></script>


    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <!-- 引入封装了failback的接口--initGeetest -->
    <script src="http://static.geetest.com/static/tools/gt.js"></script>

</head>
<body class="hold-transition login-page" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="window.event.returnValue=false" >
<div class="login-box">
    <div class="login-logo">
        <b>星辰</b>Admin
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body" id="app">

        <p class="login-box-msg">
            <span class="label label-info">请填写您的邮箱和密码（@{{ testAccount }}）</span>
        </p>
        <el-form :model="ruleForm" :rules="rules" ref="ruleForm" v-loading="loading" class="demo-ruleForm">
            <el-form-item   prop="email">
                <el-input v-model="ruleForm.email" type="email" class="has-feedback form-group"  placeholder="Email"></el-input>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </el-form-item>
            <el-form-item  prop="password">
                <el-input v-model="ruleForm.password" type="password" class="has-feedback form-group" placeholder="Password "></el-input>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </el-form-item>

            <div id="embed-captcha" style="margin-bottom: 10px"></div>
            <p id="wait" class="show">正在加载验证码......</p>
            <p id="notice" class="hide">请先拖动验证码到相应位置</p>
            <el-form-item>
                <el-button type="primary" @click="submitForm('ruleForm')"  >Sign In</el-button>
                <el-button @click="resetForm('ruleForm')">重置</el-button>
            </el-form-item>
        </el-form>
    </div>

    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
<script>
    new Vue({
        el: '#app',
        data: function(){
            return {
                loading: false,
                testAccount:'test@test.com/111111',
                ruleForm: {
                    email: '',
                    password: ''

                },
                rules:{
                    email: [
                        {required: true,  message: '请填写邮箱地址', trigger: 'blur'},
                        {type: "email", message: '邮箱格式错误', trigger: 'blur'}
                    ],
                    password: [
                        {required: true, message: '请填写密码', trigger: 'blur'},
                        {min: 6, max: 16, message: '密码长度在 6 到 16 个字符', trigger: 'blur'}
                    ]
                }
            }
        },
        methods: {
            submitForm(ruleForm) {
                var _this = this;
                _this.ruleForm['geetest_challenge'] = $(".geetest_challenge").val()
                _this.ruleForm['geetest_validate'] = $(".geetest_validate").val()
                _this.ruleForm['geetest_seccode'] = $(".geetest_seccode").val()
//                console.log(_this.ruleForm)
                var _duration = 2 * 1000;
                _this.$refs[ruleForm].validate((valid)=>{
                    if (valid) {
                        _this.loading = true;
                        axios.post('login', _this.ruleForm).then(function (response) {
                            console.log(response);
                            let data = response.data;
                            console.log(data);
                            if (data.status == 1) {
                                _this.$message({
                                    message: data.info,
                                    type:'success',
                                    duration: _duration
                                });
                                setTimeout(function () {
                                    window.location.href='index';
                                }, _duration);
                            } else {
                                _this.$message.error(data.info);
                                _this.loading = false;
                            }
                        }).catch(function (error) {
                            _this.loading = false;
                            console.log(error);
                        });
                    } else {
                        console.log('error submit!!');
                        return false;
                    }
                });
            },
            resetForm(ruleForm) {//清空表单
                this.$refs[ruleForm].resetFields();
            }
        }
    })

    var handlerEmbed = function (captchaObj) {
        $("#embed-submit").click(function (e) {

            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";

                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
        //验证成功
        captchaObj.onSuccess(function () {
            $("#but").attr("disabled",false)
        });
        //验证失败
        captchaObj.onError(function () {
            $("#but").attr("disabled",true)
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "{{ route('getVerify',array('t'=>time())) }}", // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {

            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "float", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
            }, handlerEmbed);
        }
    });

    if(window.console&&window.console.log){
        console.log('欢迎访问!');
        console.log("%c欢迎访问!","color:red");
    }
</script>
</body>
</html>
