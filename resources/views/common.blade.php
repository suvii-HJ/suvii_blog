<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Suvii Blog管理系统-@yield('title')</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link href="{{url('/')}}/css/index.css" rel="stylesheet">

    @yield('jsAndCss')
</head>
<body>
    <div class="header">
            <span>技术分享</span>
            @yield('demo')
            <p>技术改变生活，生命不息，奋斗不止！</p>
            <div class="logout">退出登录</div>
    </div>
    <div class="container">
        <div class="left-part">
            <div class="person-img">
                <img src="image/hh.jpg">
            </div>
            <div class="menu-list" >
                发布博客
            </div>
            <div class="menu-list">
                博客管理
            </div>
            <div class="menu-list">
                评论管理
            </div>
        </div>
        <div class="main-part">
           @yield('content')
        </div>
    </div>
</body>
</html>