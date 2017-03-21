@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-header">
                    <h4>
                        对话列表
                    </h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="/inbox/{{ $dialogId }}/store">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="body" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">回复私信</button>
                        </div>
                    </form>
                    @foreach($messages as  $key => $message)
                        @foreach($message as $v)
                        <div class="media">
                            <div class="media-left">
                                <h2>
                                    {{ $v->id }}
                                </h2>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    @if($key == Auth::user()->id)
                                        从<a href="#">
                                            {{ $v->fromUser->name }}
                                        </a>收到消息
                                    @else
                                        发送给<a href="#">
                                            {{ $v->toUser->name }}
                                        </a>的消息
                                    @endif
                                </h4>
                                <p>
                                        {!! $v->body !!} <span class="pull-right">{{ $v->created_at->format('Y-m-d') }}</span>
                                </p>
                            </div>
                        </div>
                        <hr>
                            @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection