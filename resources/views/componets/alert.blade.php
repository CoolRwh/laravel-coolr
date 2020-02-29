
<div class="modal inmodal" id="{{$id}}" tabindex="-1" role="dialog" aria-hidden="true">


    <div class="modal-dialog">


        <div class="modal-content animated bounceInRight">


               @if($method === 'PUT')
                    <form action="{{route($url,[$data])}}" method="{{$method}}">
                        @elseif($method === 'POST')
                            <form action="{{route($url)}}" method="{{$method}}">
                   @endif

                                    @method('PUT')
                                    @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
                <i class="fa fa-laptop modal-icon"></i>
                <h4 class="modal-title">{{$title}}</h4>
{{--                <small class="font-bold">这里可以显示副标题。</small>--}}
            </div>

{{--  占位符$slot--}}
            {{$slot}}

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
</form>

        </div>


    </div>

</div>
