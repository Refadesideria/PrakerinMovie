<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>World</span></a></div>
          <ul>
            <li><a href="#"><img src="images/icon1-act.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/icon2.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/icon3.gif" alt="" /></a></li>
          </ul>
        </div>
        <div class="row-2">
        @include('frontend.layouts.includes.navbar')
        </div>
      </div>
      <div id="content">
        @yield('content')
      </div>
      
      @include('frontend.layouts.includes.footer')
    </div>
  </div>
</div>


<script src="{{ asset('frontendjs/jquery-1.4.2.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('frontendjs/cufon-yui.js')}}" type="text/javascript"></script>
<script src="{{ asset('frontendjs/cufon-replace.js')}}" type="text/javascript"></script>
<script src="{{ asset('frontendjs/Gill_Sans_400.font.js')}}" type="text/javascript"></script>
<script src="{{ asset('frontendjs/script.js')}}" type="text/javascript"></script>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>