@extends('common')
@section('title','首页')

@section('jsAndCss')
@endsection

@section('content')
    <div class="welcome-bar">
        <div class="master">
            欢迎主人，您有最新动态！
        </div>
        <div class="dynamic">子胥大神，真乃神人，膜拜！  2018-12-12 10:12am</div>
    </div>
    <div class="visit-bar">
        <div class="visit_num">
            <p class="visit_num_ti">总访客数: <br><span class="visit_num_show">588</span></p>
        </div>
        <div class="visit_num">
            <p class="visit_num_ti">本周访客数:<br><span class="visit_num_show">120</span></p>
        </div>
        <div class="visit_num">
            <p class="visit_num_ti">今日访客数:<br><span class="visit_num_show">30</span></p>
        </div>
    </div>
    <div class="remark-bar">
        <div class="remark-title">最近评论 <span style="font-size: 13px;color: #a58700;float: right;margin-right: 2rem;">更多</span></div>
        <div class="remark-item">子胥大神，真乃神人，膜拜！  2018-12-12 10:12am</div>
        <div class="remark-item">子胥大神，真乃神人，膜拜！  2018-12-12 10:12am</div>
        <div class="remark-item">子胥大神，真乃神人，膜拜！  2018-12-12 10:12am</div>
        <div class="remark-item">子胥大神，真乃神人，膜拜！  2018-12-12 10:12am</div>
    </div>


@endsection

