@extends('layouts.main')
@section('content')
<div id="wrapper">

    <div id="wrapper">
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 1700px;
                    margin-top: 10px;">
                    <div class="path"><a href='/'>主页</a> > <a href='/life/'>{{ $details[0]['cate']['title'] }}</a> > </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title" >
                                    <center><span>{{ $details[0]['title'] }}</span><span class="title_date"></span></center></h2>
                                <center><p class="single_info">时间：{{ $details[0]['created_at'] }}&nbsp;&nbsp;&nbsp;编辑：{{ $details[0]['author'] }}</p></center>
                            </div>
                            <div class="div-content">

                                <p>
                                <p>（本文作者：{{ $details[0]['author'] }}）</p>
                                {!! $details[0]['content'] !!}
                                <center id="pagenav">
                                </center>

                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">

                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_renren">
                                                        </a><a class="jiathis_button_kaixin001"></a><a href="http://www.jiathis.com/share"
                                                                                                       class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                            charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="clear">
                            </div>
                            <div class="clear">
                            </div>--}}
                            <div class="comments_wrap" style="margin-top: 35px;">
                                <a name="comment"></a>
                                <!-- Duoshuo Comment BEGIN -->
                                <div class="ds-thread" data-thread-key=""
                                     data-title="" data-author-key="" data-url=""></div>
                                <script type="text/javascript">
                                    var duoshuoQuery = {short_name:"dede58"};
                                    (function() {
                                        var ds = document.createElement('script');
                                        ds.type = 'text/javascript';ds.async = true;
                                        ds.src = 'http://static.duoshuo.com/embed.js';
                                        ds.charset = 'UTF-8';
                                        (document.getElementsByTagName('head')[0]
                                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                                    })();
                                </script>
                                <!-- Duoshuo Comment END -->
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sidebar">

                <like-button article_id="{{ $details[0]['id'] }}"></like-button>
                {{--<div class="widget single" style="margin-bottom: 0px; margin-left: 0px; margin-top: 40px;
                    padding-bottom: 0px;" id="newdigg">
                    --}}{{--<div class="single_views"">--}}{{--

                    <span class="textcontainer"><span class="votecount26536">{{ $details[0]['favor_count'] }}</span></span>

                    --}}{{--<span class="bartext voteid26536"><a href="#"--}}{{--
                    --}}{{--id="aZanImg" onclick="javascript:postDigg('good',382)"></a></span>--}}{{--
                    <span class="text" id="spanZan">赞</span>
                    <span class="text love">人</span>

                    --}}{{--</div>--}}{{--


                </div>--}}
                <!-- 右侧 -->


                <div class="widget portrait">
                    <div>
                        <div class="textwidget">
                            <a href="/tougao.html"><img src="{{ asset('images/tg.jpg') }}" alt=""></a><br><br>
                        </div>
                    </div>
                </div>


            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>
@endsection
