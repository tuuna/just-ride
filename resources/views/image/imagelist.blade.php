@extends('layouts.main')
@section('content')
<div id="wrapper">

    <style type="text/css">
        body
        {
            background-image: none;
            background-color: #dedede;
            color: #999999;
            font-family: "Microsoft Yahei" , "Helvetica Neue" ,Arial,Helvetica,sans-serif;
            font-size: 12px;
            height: 100%;
            text-align: left;
            width: 100%;
        }
        #xh_container
        {
            min-height: 1000px;
            background-color: #dedede;
            margin-top: 36px;
            width: 1098px;
        }
        #wrapper
        {
            background-color: #dedede;
        }
        #l-nav
        {
            background-image: url('/blog4./style/simg/look-bike-nav-bg.png');
            width: 188px;
            height: 360px;
            float: left;
        }
        #l-nav a
        {
            font-size: 14px;
            color: #000000;
        }
        #l-nav a:hover
        {
            font-size: 14px;
            color: #999999;
        }
        #l-nav div
        {
            padding-left: 20px;
        }
        #l-nav .l-nav-word
        {
            height: 40px;
            line-height: 40px;
        }
        #l-focus
        {
            float: right;
        }
        img
        {
            vertical-align: middle;
        }

        div
        {
            color: #666666;
        }
        #menu-item-196 a.a,#menu-item-198 a.a,#menu-item-197 a.a{color: #00BBEE;}
        #menu-item-198{ background-image:url('../public/images/up-arrow.png'); background-position: center bottom; background-repeat:no-repeat;}
        .boxBor{
            position:absolute;left:0;top:0;display:none;z-index:9999; background-color:#ffffff;opacity: 0.3;filter:alpha(opacity=30)
        }

    </style>
    <div id="xh_container">


        <div class="xh_265x265x00">
            @foreach($articles as $article)
            <div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="{{ url('single/'.$article->id) }}"><img src="{{ asset($article->pic) }}" alt="{{ $article->title }}" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">{{ $article->created_at }}</div>
                    <div style="font-size: 14px;height:45px;">
                        <a target="_blank" href="{{ url('single/'.$article->id) }}">{{ $article->title }}</a></div>

                </div>
            </div>
            @endforeach



            <div style="clear: both;">
            </div>
            <div id="pagination"> {{ $articles->links() }}</div>
        </div>
    </div>
    @endsection