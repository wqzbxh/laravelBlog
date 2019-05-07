<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="{{ URL::asset('lib') }}/html5shiv.js"></script>
<script type="text/javascript" src="{{ URL::asset('lib') }}/respond.min.js"></script>
<![endif]-->
<link href="{{ URL::asset('static') }}/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('static') }}/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('static') }}/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('lib') }}/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="{{ URL::asset('lib') }}/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<script type="text/javascript" src="{{ URL::asset('static') }}/h-ui/js/form.min.js"></script>
<![endif]-->
<title>后台登录6425</title>
<meta name="keywords" content="登录页面">
<meta name="description" content="福亮个人SEO文章博客">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
{{--<div class="header"></div>--}}
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" id="form1" action="login\loginAction" method="post">
      {{ csrf_field() }}
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="access" type="text" placeholder="Login ID"  value="wqzbxh" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="password" type="password" placeholder="CODE OF THE BIBLE" value="123456" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" placeholder="Security code" style="width:150px;" name="captcha">
          <img src= "{{captcha_src()}}" id="captcha_img" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()"> </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            Keeps me logged in</label>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input type="submit" class="btn btn-success radius size-L" id="" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            <?php var_dump($errors->all()) ?>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif


    </form>
  </div>
</div>

<div class="footer">Copyright Wqzbxh個人文章博客</div>
<script type="text/javascript" src="{{ URL::asset('lib') }}/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('static') }}/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('static') }}/h-ui/js/hui.js"></script>

<script>
  $(function () {
    var options = {
      success: function (data) {
        if(data.code == 200){
          console.log(data.code)
          alert('登录成功！')
        }
      },error:function(XmlHttpRequest, textStatus, errorThrown){
        arr = '';
        var errors = (JSON.parse(XmlHttpRequest.responseText)).errors
        for (let i in errors) {
          if(arr==''){
            arr = errors[i];
          }else{
            arr = arr + '|' + errors[i]
          }
        }
        alert(arr);

      }
    };
    $("#form1").ajaxForm(options);

  });
</script>