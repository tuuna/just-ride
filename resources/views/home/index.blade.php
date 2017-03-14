{{--<script>
    function subForm()
    {

        formsearch.submit();
        //form1为form的id
    }
</script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>--}}
@extends('layouts.main')
@section('content')
<div id="xh_wrapper">

    <input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">
            <div id="zSlider">
                <div id="picshow">
                    <div id="picshow_img">
                        <ul>
                            <li style="display: list-item;"><a href="/life/361.html" target="_blank">
                                    <img src="images/1-140206162449A0.jpg" alt="骑行40000公里 英国胶片摄影师的骑游之旅"></a></li>
                            <li style="display: list-item;"><a href="/life/394.html" target="_blank">
                                    <img src="images/354.jpg" alt="骑看世界：春节骑行海南岛 畅游冬日骑行天堂"></a></li>
                            <li style="display: list-item;"><a href="/life/364.html" target="_blank">
                                    <img src="images/1-1402061A315209.jpg" alt="隆猫西班牙自行车之旅-Mallorca岛梦幻旅程（上）"></a></li>
                            <li style="display: list-item;"><a href="/gear/rs/320.html" target="_blank">
                                    <img src="images/1-1402061A155W4.jpg" alt="#CES展上的新玩意# Casio 发布 STB-1000 智能手表 可同步骑行速"></a></li>



                        </ul>
                    </div>
                </div>
                <div id="select_btn">
                    <ul>
                        <li class="current"></li><li class=""></li><li class=""></li><li class=""></li>
                    </ul>
                </div>
                <div class="focus-bg-title"><div id="focus-left" class="arrow-left" onmouseover="IFocuse(this,true)" onmouseout="IFocuse(this,false)"></div>
                    <div id="focus-center" class="focus-title">
                        <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
                        <div style="float:right;width:200px;"></div>
                    </div>
                    <div id="focus-right" class="arrow-right"></div></div>
            </div>
            <div id="picshow_right">
                <a href="/life/416.html" target="_blank">
                    <img src="images/1-140206160415Y6.jpg" alt="COACH再度携手王力宏 踩单车演" width="255px" height="420px"></a>

                <div id="picshow_right_cover" onclick="goanewurl()" style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>
            </div>
        </div>
    </div>
    <div id="xh_container">
        <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                <br>
                @foreach($articles as $article)
                <div class="xh_post_h_3 ofh">
                    <div class="xh_265x265">
                        <a  href="{{ url('single/'.$article->id) }}" title="{{ $article->title }}">
                            <img src="{{ $article->pic }}" alt="{{ url('single/'.$article->id) }}" height="240" width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh">
                            <a  href="{{ url('single/'.$article->id) }}" title="{{ $article->title }}">{{ $article->title }}</a>
                        </h2>
                        <span class="time">{{ $article->created_at }}</span>
                        <div class="xh_post_h_3_entry ofh">          <?php echo mb_substr($article->content,10);?>...
                        </div>
                        <div class="b">
                            <span title="{{ $article->favor_count }}人赞" class="xh_love"><span class="textcontainer"><span>{{ $article->favor_count }}</span></span> <span class="bartext"></span></span> <span title="{{ $article->click_count }}人浏览" class="xh_views">{{ $article->click_count }}</span>
                        </div>
                    </div>
                    <span class="cat"><a href="/life/" title="{{ $article->cate->title }}"
                                         rel="category tag">{{ $article->cate->title }}</a></span>
                </div>
                @endforeach

            </div>
            <div id="pagination">{{ $articles->links() }}</div>
        </div>
        <div id="xh_sidebar">

            <div class="widget">

                <div style="background: url('../public/style/img/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                </div>
                <ul id="ulHot">

                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank"><img src="images/68.png" width="83" title="环西冠军克里斯霍纳的个性化定制座驾 Trek Madone公路车" /></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank" title="环西冠军克里斯霍纳的个性化定制座驾 Trek Madone公路车">环西冠军克里斯霍纳的个性化定制座驾 Trek Ma</a></div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/small/184.html" target="_blank"><img src="images/146.jpg" width="83" title="英式折叠车Brompton Junction 上海旗舰店" /></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/small/184.html" target="_blank" title="英式折叠车Brompton Junction 上海旗舰店">英式折叠车Brompton Junction 上海旗舰店</a></div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/368.html" target="_blank"><img src="images/327.jpg" width="83" title="骑摆记：比利时车手Joris的尼泊尔野马河谷山地车之旅" /></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/368.html" target="_blank" title="骑摆记：比利时车手Joris的尼泊尔野马河谷山地车之旅">骑摆记：比利时车手Joris的尼泊尔野马河谷山</a></div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/378.html" target="_blank"><img src="images/335.jpg" width="83" title="深圳设计师浩子和77的11天成都-稻城自虐骑行" /></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/378.html" target="_blank" title="深圳设计师浩子和77的11天成都-稻城自虐骑行">深圳设计师浩子和77的11天成都-稻城自虐骑行</a></div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/news/398.html" target="_blank"><img src="images/359.jpg" width="83" title="爱车出行新概念 YAKIMA与WHISPBAR将在中国自行车展同台亮相" /></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/news/398.html" target="_blank" title="爱车出行新概念 YAKIMA与WHISPBAR将在中国自行车展同台亮相">爱车出行新概念 YAKIMA与WHISPBAR将在中国自</a></div>
                    </li>

                </ul>
            </div>

            <div class="widget portrait">
                <div>
                    <div class="textwidget">
                        <a href="/tougao.html"><img src="images/tg.jpg" alt="投稿"></a><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<div class="sitemap">
    <h4>
        SITE MAP</h4>
    <div class="l">
        <ul id="menu-sitemap" class="menu">
            @foreach($categories as $category)
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="{{ url('artlist/'.$category->id) }}">{{ $category->title }}</a>
                <ul class="sub-menu">
                    @foreach($category->child as $v)
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank" href="{{ url('artlist/'.$v->id) }}">{{ $v->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="r">
        <h5>
            FOLLOW US</h5>

        <img src="images/weixin.jpg" alt="" title="扫描添加我们的公众微信" class="alignnone size-full wp-image-18966"
             height="140" width="120"></a></div>
</div>
    @endsection