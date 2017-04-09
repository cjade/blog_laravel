<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>星辰Admin - 跳转提示</title>

    <script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <link href="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body>
<?php
$wait = empty($wait)?3:$wait;
?>
<div class="ui card" style="text-align:center;width:40%;position: fixed;top: 20%;left: 30%">
    @if($status == 1)
    <div class="ui green inverted segment" style="margin: 0px;">
        <i class="ui smile icon massive"></i>
    </div>
    @else
    <div class="ui red inverted segment" style="margin: 0px;">
        <i class="ui frown icon massive"></i>
    </div>
    @endif
    <div class="content" style="line-height: 2em">
        <span class="header">{{$info}}</span>
        <div class="meta">
            将在<span id="left">{{$wait}}</span>S后自动跳转
        </div>
    </div>
    <span style="display: none" id="href">{{$url}}</span>
    <div class="ui bottom attached indicating progress" id="amanege-bar">
        <div class="bar"></div>
    </div>
</div>
</body>
<script type="text/javascript">
    (function(){
        var wait = 0,left = $('#left').text();
        var href = $('#href').text();
        var each = 100/left;
        var interval = setInterval(function(){
            wait = wait + each;
            left = left - 1;
            if(wait > 100) {
                location.href = href;
                clearInterval(interval);
                return ;
            }
            $('#left').text(left);
            $('#amanege-bar').progress({
                percent: wait
            });
        }, 1000);
    })();
</script>
</html>