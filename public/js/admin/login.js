/**
 * Created by chengyu on 17/4/23.
 */
new Vue({
    el: '#app',
    data: function(){
        return {
            loading: false,
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