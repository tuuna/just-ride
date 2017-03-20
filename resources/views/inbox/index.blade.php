@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-header">
                    <h4>
                        消息通知
                    </h4>
                </div>
                <div class="panel-body">
                    @foreach($messages as $messageGroup)
                        <div class="media">
                            {{--<div class="media-left">
                                <a href="">
                                    {{ $messageGroup->first()->fromUser->name }}
                                </a>
                            </div>--}}
                            <div class="media-body">
                                <h4 class="media-heading">
                                    发件人:
                                    <a href="#">
                                        {{ $messageGroup->first()->fromUser->name }}
                                    </a>
                                </h4>
                                <p>
                                    <a href="/inbox/{{ $messageGroup->first()->fromUser->id }}">
                                        {!! $messageGroup->first()->body !!}
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