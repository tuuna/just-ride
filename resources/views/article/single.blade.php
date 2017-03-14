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
                                    <div style="float: right; width: 60px; font-size: 12px;">
                                        分享至：</div>
                                    <div style="clear: both;">
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                            <div id="ctl00_ctl00_ContentPlaceHolder1_contentPlace_divRead">
                                <div style="text-align: left; width: 100%; border-bottom: solid 1px #e0e0e0; padding-bottom: 4px;
                                    color: Black; vertical-align: middle; font-weight: bold;">
                                    &nbsp;&nbsp;猜您喜欢的文章
                                </div>
                                <ul class="read" style="list-style-type: none; margin-top: 10px; width: 780px;">
                                    <li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/379.html" target="_blank"><img src="{{ asset('images/342.jpg') }}" style="width: 250px; height: 150px; margin-bottom: 0px;" />
                                            <span style="margin: 0px; padding: 0px; margin-top: -5px;">众里寻她千百度，蓦然回首，那景却在，延京深</span></a></li>
                                    <li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/377.html" target="_blank"><img src="{{ asset('images/336.jpg') }}" style="width: 250px; height: 150px; margin-bottom: 0px;" />
                                            <span style="margin: 0px; padding: 0px; margin-top: -5px;">周末4+2出行 到北京怀柔喇叭沟门赏红叶</span></a></li>
                                    <li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/363.html" target="_blank"><img src="{{ asset('images/323.jpg') }}" style="width: 250px; height: 150px; margin-bottom: 0px;" />
                                            <span style="margin: 0px; padding: 0px; margin-top: -5px;">周末随拍：北京单车生活</span></a></li>

                                </ul>
                            </div>
                            <div class="clear">
                            </div>
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
                <div class="widget single" style="margin-bottom: 0px; margin-left: 0px; margin-top: 40px;
                    padding-bottom: 0px;" id="newdigg">
                    <div class="single_views" onmouseout="ILike(this,false)" onmouseover="ILike(this,true)">
                        <span class="textcontainer"><span class="votecount26536">0</span></span> <span class="bartext voteid26536"><a href="#"
                                                                                                                                      id="aZanImg" onclick="javascript:postDigg('good',382)"></a></span><span class="text" id="spanZan">赞</span>
                        <span class="text love">人</span>
                    </div>


                </div>
                <script language="javascript" type="text/javascript">getDigg(382);</script>
                <!-- 右侧 -->

                <div class="widget">

                    <div style="background: url('../public/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                    </div>
                    <ul id="ulHot">

                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/368.html" target="_blank"><img src="{{ asset('images/327.jpg') }}" width="83" title="骑摆记：比利时车手Joris的尼泊尔野马河谷山地车之旅" /></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/368.html" target="_blank" title="骑摆记：比利时车手Joris的尼泊尔野马河谷山地车之旅">骑摆记：比利时车手Joris的尼泊尔野马河谷山</a></div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/378.html" target="_blank"><img src="{{ asset('images/335.jpg') }}" width="83" title="深圳设计师浩子和77的11天成都-稻城自虐骑行" /></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/378.html" target="_blank" title="深圳设计师浩子和77的11天成都-稻城自虐骑行">深圳设计师浩子和77的11天成都-稻城自虐骑行</a></div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/389.html" target="_blank"><img src="{{ asset('images/347.jpg') }}" width="83" title="执着的小辫与西藏的骑车旅行" /></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/389.html" target="_blank" title="执着的小辫与西藏的骑车旅行">执着的小辫与西藏的骑车旅行</a></div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/388.html" target="_blank"><img src="{{ asset('images/351.jpg') }}" width="83" title="玄白朱单骑英国第二季 芒特索洛尔骑行" /></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/388.html" target="_blank" title="玄白朱单骑英国第二季 芒特索洛尔骑行">玄白朱单骑英国第二季 芒特索洛尔骑行</a></div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/382.html" target="_blank"><img src="{{ asset('images/345.jpg') }}" width="83" title="子弹传球：北京-香港4000多公里单车寻爱之旅" /></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/382.html" target="_blank" title="子弹传球：北京-香港4000多公里单车寻爱之旅">子弹传球：北京-香港4000多公里单车寻爱之旅</a></div>
                        </li>



                    </ul>
                </div>

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
