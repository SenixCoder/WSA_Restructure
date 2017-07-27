<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<!--html header-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>微信数据统计与分析平台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="./ALTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./ALTE/bootstrap/offline/font-awesome-4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <link rel="stylesheet" href="./ALTE/bootstrap/offline/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./ALTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="./ALTE/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <!--dont move to end of file, as it is required-->
    <script src="./ALTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="./ALTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./ALTE/dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a>微信数据统计与分析</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">请不要使用IE8或8以下浏览器，推荐使用<b>谷歌浏览器、火狐浏览器</b></p>
        <form action="/index.php/login/login" method="post">
            <div class="form-group has-feedback">
                <!--<input type="email" name="user" class="form-control" placeholder="Email">-->
                <input id="name" name="account" class="form-control" placeholder="用户名" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" name="password" class="form-control" placeholder="密码" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label style="padding-left: 12px;">
                            <a href="#" id="demo">免登陆预览</a><!--<input type="checkbox"> Remember Me-->
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button id="submit" type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div><!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <strong>Copyright &copy; 2015 <a href="http://sklcc.suda.edu.cn/">融合通信实验室</a>.</strong> All rights reserved.<a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">苏ICP备16025482号</a>
        </div>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<footer>
    <!-- To the right -->

</footer>
<!-- jQuery 2.1.4 -->
<script src="./ALTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="./ALTE/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./ALTE/plugins/iCheck/icheck.min.js"></script>
</body>
</html>

<script type="text/javascript">
    $(function (){
        var result = "";

        if(result) {
            alert(result);
        }
    });

    $('#demo').click(function() {
        $('#name').val('demo');
        $('#password').val('123456');
        $('#submit').click();
    });
</script>