@extends('common')

@section('title','创建新博客')

@section('jsAndCss')
    <script src="https://use.fontawesome.com/38efea52f5.js"></script>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/simditor/css/simditor.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/webUploader/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/new-blog.css" />
    <script type="text/javascript" src="{{url('/')}}/webUploader/webuploader.js"></script>
    <script type="text/javascript" src="{{url('/')}}/simditor/js/module.js"></script>
    <script type="text/javascript" src="{{url('/')}}/simditor/js/hotkeys.js"></script>
    <script type="text/javascript" src="{{url('/')}}/simditor/js/uploader.js"></script>
    <script type="text/javascript" src="{{url('/')}}/simditor/js/simditor.js"></script>
@endsection

@section('left-banner')

@endsection

@section('content')
    <form class="blog-form">
        <div class="blog-title" style="color: #5c6166;">
            标题：<input class="form-control" type="text" placeholder="博客标题" style="margin-left: 3rem;"/>
        </div>
        <div class="blog-type">
            博客类型：
            <select class="" style="margin-left: 1rem;">
                <option value="">请选择博客类型...</option>
                <option value="">Java</option>
                <option value="">python</option>
                <option value="">数据库</option>
            </select>
        </div>
        <div class="blog-thumb">
            缩略图：
            <input type="file" class="form-control" placeholder="请上传缩略图" style="margin-left: 2rem;"/>
        </div>
        <div class="blog-context">
            <span>博客内容: </span>
            <textarea id="editor" autofocus></textarea>
        </div>
        <script>
            var editor = new Simditor({
                textarea: $('#editor'),
                placeholder:'请输入博客内容...',
                tabIndent : true,
                upload :{
                    url:'./upload',
                    fileKey:'5',  //服务器端获取文件数据的参数名
                    leaveConfirm:'正在上传文件',
                }
            });
        </script>
        <div>
            <button class="blog-submit">提交</button>

        </div>
    </form>
@endsection
