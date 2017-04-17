@extends('layouts.main')
@section('content')
    <style>
        .media-unread {
            background-color: #dadada;
            opacity: 0.1%;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-header">
                    <h4>
                        消息通知
                    </h4>
                </div>
                <div class="panel-body">
                    @foreach($messages as $key => $messageGroup)
                        <div class="media media-{{ $messageGroup->last()->shouldAddReadClass() ? 'unread' : '' }}">
                            <div class="media-left">
                                <h2>
                                    {{ $messageGroup->first()->id }}
                                </h2>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    @if($key == Auth::user()->id)
                                    从<a href="#">
                                            {{ $messageGroup->first()->fromUser->name }}
                                        </a>收到消息
                                    @else
                                        已给<a href="#">
                                            {{ $messageGroup->first()->toUser->name }}
                                        </a>发送了消息
                                    @endif
                                </h4>
                                <p>
                                    <a href="/inbox/{{ $messageGroup->last()->dialog_id }}">
                                        {!! $messageGroup->last()->body !!}
                                    </a>
                                </p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection