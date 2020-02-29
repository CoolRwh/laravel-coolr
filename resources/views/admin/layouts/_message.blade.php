{{--
        <i class="fa fa-exclamation-triangle"></i>【警 告】 Warning ! <br>

        <i class="fa fa-check-square-o" aria-hidden="true"></i>【修改成功!】 Success ! <br>

        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>【错 误】 Error ! <br>

</div>--}}

@foreach (['danger', 'warning', 'success','info'] as $msg)
    @if(session()->has($msg))
        <div class="alert alert-{{$msg}} alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
        @if($msg == 'success')
                <div style="font-size: 20px">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>【{{ session()->get($msg) }}】 Success ! <br>
                </div>
            @endif
        </div>

    @endif
@endforeach

@if ($errors->any())
    <div class="alert alert-warning alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
        <ul>
            <div style="font-size: 20px">
                <i class="fa fa-exclamation-triangle"></i>【警 告】 Warning ! <br>
            </div>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
