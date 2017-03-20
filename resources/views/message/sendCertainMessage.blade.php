@extends('layouts.main')
@include('vendor.ueditor.assets')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">收信人：{{ $userInfo->name }}</div>
                    <div class="panel-body">
                        <form action="/message/sent" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="body">内容</label>
                                <input type="hidden" name="from_user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="to_user_id" value="{{ $userInfo->id }}">
                                <script id="container" name="body" type="text/plain">
                                    {!! old('body') !!}

                                </script>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button class="btn btn-success pull-right" type="submit">提交文章</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('js')
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container', {
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });

    </script>
@endsection
@endsection