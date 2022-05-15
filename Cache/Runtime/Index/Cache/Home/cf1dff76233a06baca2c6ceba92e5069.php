<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>考勤系统</title> 
  <!-- Loading Bootstrap -->
    <link href="/Public/index/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/Public/index/css/flat-ui.css" rel="stylesheet">
    <link href="/Public/index/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="/Public/index/images/icons/png/Clipboard.png">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      function a(){
        alert("还不行的话，找管理员吧～上帝保佑你");
      }
    </script>
  </head>
  <body>
    <form class="form-signin" role="form" action="" method='post' id="form">
    <div class="container">
      <div class="login">
        <div class="login-screen">

          <div class="login-icon">
            <img src="/Public/index/images/icons/png/Pensils.png" alt="Welcome to Mail App">
            <h4>欢迎来到 <small>考勤系统</small></h4>
          </div>

          <div class="login-form">
            <center style="color:black"><?php echo ($datee); ?></center>
            <center style="color:black"><?php echo ($name); ?></center>
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo U('Home/Index/index','item='.$id.'&name='.$name);?>">签到请按我</a>
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo U('Home/Index/day','item='.$id);?>">查看数据请按我</a>
            <a class="login-link" style="color:black">请将此页面转发至相关群聊，并妥善保管</a>
          </div>
        </div>
      </div>
    </div>
    </form>
    <center><a href="https://beian.miit.gov.cn" target="_blank"> 
鲁ICP备20015413号-1</a></center>
  </body>
</html>