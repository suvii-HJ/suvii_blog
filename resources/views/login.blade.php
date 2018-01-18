<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Suvii Blog管理系统-登录</title>

    <link href="{{url('/')}}/css/login.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>

    <div class="login-form">
        <div class="login-title">博客后台管理系统--登录</div>
        <form action="" >
            <input type="hidden" value="{{route('login')}}">
            <label for="name" class="form-label">
                用户:
                <input type="text" class="form-box" id="name">
            </label>
            <label for="password" class="form-label">
                密码:
                <input type="text" class="form-box" id="password">
            </label>
            <button type="button" class="form-submit" onclick="login()"> 登录</button>
        </form>
    </div>
    <script>
        function login() {
            var url = $('form :hidden').val();
            window.open(url,'_self');
        }
    </script>   
</body>

</html>
