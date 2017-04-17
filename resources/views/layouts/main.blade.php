<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '单车社区') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        Laravel.apiToken = "{{ Auth::check() ? 'Bearer '.Auth::user()->api_token : 'Bearer ' }}"
    </script>
</head>
<div id="app">
<div class="xh_body" >
<div id="header_wrap">
    <div id="header">
        {{--<div style="float: left; width: 310px;">--}}
        <a class="navbar-brand" style="margin-top:8px" href="{{ url('/') }}">
            {{ config('app.name', '单车社区') }}
        </a>
        {{--<h1>
            <div class="" id="logo-sub-class">
            </div>
        </h1>--}}
        {{--</div>--}}
        <div id="navi">

            <ul id="jsddm">
                <li><a class="navi_home" href="/">首页</a></li>
                @foreach($categories as $cate)
                    <li>
                        <a href="{{ url('artlist/'.$cate->id) }}">{{$cate->title}}</a>
                        <ul>
                            @foreach($cate->child as $v)
                                <li><a href="{{ url('artlist/'.$v->id) }}">{{$v->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                @if (Auth::guest())
                    <li>|</li>
                    <li><a href="{{ route('login') }}">登录</a></li>
                    <li>|</li>
                    <li><a href="{{ route('register') }}">注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    退出
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="/inbox" class="btn btn-primary ">

                            消息 <span class="badge">{{ $messageCount }}</span>
                        </a>
                    </li>
                @endif

            </ul>
            <div style="clear: both;">
            </div>


        </div>
       {{-- <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
                    <form  name="formsearch" action="/plus/search.php"><input type="hidden" name="kwtype" value="0" />
                        <input name="q" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
                    </form>
                </div>
                <div style="float: left;">
                    <img src="{{ asset('images/search-new.png') }}" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>


                <div style="clear: both;">
                </div>

            </div>

        </div>

    </div>--}}
</div>

</div>

    @yield('content')

    <div id="footer_wrap">
        <div id="footer">
            <div class="footer_navi">
                <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
                    <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                        <a href="/page">关于我</a></li>
                    <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
                        <a href="/image">文章导航</a></li>
                    <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
                        <a href="/tougao.html">我要投稿</a></li>
                </ul>
            </div>
            <div class="footer_info">
            <span class="legal">Copyright &#169; 2017  版权所有&#160;&#160;&#160;<a href="#">
                蜀ICP备15022210号-2</a>&#160;&#160;&#160;

            </div>
        </div>
    </div>
    <div style="display: none;" id="scroll">
    </div>
</div>
<!-- Scripts -->
@yield('js')
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>