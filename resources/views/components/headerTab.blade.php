<div class="header-tab">
    <div class="container">
        @if($activeIndex === 1)
            <a href="/index" class="mdl-layout__tab is-active">首页</a>
        @else
            <a href="/index" class="mdl-layout__tab">首页</a>
        @endif

        @if($activeIndex === 2)
            <a href="/account/" class="mdl-layout__tab is-active">个人中心</a>
        @else
            <a href="/account/" class="mdl-layout__tab">个人中心</a>
        @endif

        @if($activeIndex === 3)
            <a href="" class="mdl-layout__tab is-active">职位搜索</a>
        @else
            <a href="" class="mdl-layout__tab">职位搜索</a>
        @endif

        @if($activeIndex === 4)
            <a href="/news/" class="mdl-layout__tab is-active">资讯中心</a>
        @else
            <a href="/news/" class="mdl-layout__tab">资讯中心</a>
        @endif
        <div style="clear: both;"></div>
    </div>
</div>
