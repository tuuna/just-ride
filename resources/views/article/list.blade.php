@extends('layouts.main')
@section('content')
<div id="wrapper">


    <div id="xh_container">
        <div id="xh_content">

            <div class="path"><a href='/'>主页</a> > <a href='{{ url('artlist/'.$listInfo[0]['id']) }}'>{{ $listInfo[0]['title'] }}</a> > </div><div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
                @foreach($listInfo as $info)
                    @foreach($info['articles'] as $v)
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a  href="{{ url('single/'.$v['id']) }}" title="{{ $v['title'] }}">
                            <img src="{{ asset($v['pic']) }}" alt="{{ $v['title'] }}" height="240" width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a  href="{{ url('single/'.$v['id']) }}" title="{{ $v['title'] }}">{{ $v['title'] }}</a>
                        </h2>
                        <span class="time">{{ $v['created_at'] }}</span>
                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            <?php echo mb_substr($v['content'],20);?>
                        </div>
                        <div class="b">
                            <a href="{{ url('single/'.$v['id']) }}" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="{{ $v['favor_count'] }}人赞" class="xh_love"><span class="textcontainer"><span>{{ $v['favor_count'] }}</span></span> </span> <span title="{{ $v['click_count'] }}人浏览" class="xh_views">
                                                    {{ $v['click_count'] }}</span>
                        </div>
                    </div>
                    <span class="cat"><a href="{{ url('artlist/'.$info['id']) }}" title="{{ $info['title'] }}"
                                         rel="category tag">{{ $info['title'] }}</a></span>
                </div>
                    @endforeach
                @endforeach
            </div>
            <div id="pagination">{!! $paginator->render() !!}</div>
        </div>
        <div id="xh_sidebar">
            <!-- 右侧 -->

            <div class="widget">

                <div style="background: url('../public/style/img/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                </div>
                <ul id="ulHot">
                    @foreach($newest as $new)
                        @foreach($new['articles'] as $v)
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="{{ url('single/'.$v['id']) }}"><img src="{{ asset($v['pic']) }}" width="83" title="{{ $v['title'] }}" /></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="{{ url('single/'.$v['id']) }}" title="{{ $v['title'] }}">{{ $v['title'] }}</a></div>
                    </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>

            <div class="widget portrait">
                <div>
                    <div class="textwidget">
                        <a href="/tougao.html"><img src="{{ asset('images/tg.jpg') }}"></a><br><br>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear">
        </div>
    </div>
@endsection
