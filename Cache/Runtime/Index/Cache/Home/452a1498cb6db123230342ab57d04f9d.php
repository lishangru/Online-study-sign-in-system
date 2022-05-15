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
    <form class="form-signin" role="form" action="<?php echo U('Index/addHandle');?>" method='post' id="form">
    <div class="container">
      <div class="login">
        <div class="login-screen">

          <div class="login-icon">
            <img src="/Public/index/images/icons/png/Pensils.png" alt="Welcome to Mail App">
            <h4>欢迎来到 <small>考勤系统</small></h4>
          </div>

          <div class="login-form">
            <center style="color:black">课代表创建考勤</center>
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="输入待签到课程名称" id="login-name" type="text" name='name'>
              <label class="login-field-icon fui-user" for="login-name"></label>
              <p class="top15 captcha" id="captcha-container">  
</p>  
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" href="#">创 建 签 到</button>
            <a class="login-link">服务器时间：<?php echo ($datee); ?></a>
          </div>
        </div>
      </div>
    </div>
    </form>
    <center><a href="https://beian.miit.gov.cn" target="_blank"> 
鲁ICP备20015413号-1</a></center>
  </body>
</html>