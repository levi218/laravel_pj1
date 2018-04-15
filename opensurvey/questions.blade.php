@extends('layouts.app')

@section('content')

<div class="grid">

    <div class="infinite-scroll"> 
        @foreach($questions as $entry)

        <div id = "div_q_{{$entry->id}}" class = "row cells7">
            <div class="cell colspan5 offset1">
                <div class="panel collapsible collapsed" data-role="panel">
                    <div class="heading" style="height:95px;">
                        <span class="icon mif-question"></span>

                        <div class="title" style="display:block; margin:0px; padding-left:58px; padding-right:30px;">{{$entry->question}}</div>
                        <!--div style="display:block; padding-left:58px; margin:0px; padding-top:5px;" class="title minor-header">#tag1 #tag2 #tag3></div-->
                    </div>

                    <div class="content" style="padding: 10px 0px 10px 0px">
                        <form action="{{ route('questions.answer') }}" method="post">
                            {{ csrf_field() }}
                            <div class="grid">
                                <input type="hidden" name="qId" value="{{$entry->id}}"/>
                                @foreach($entry->dec_answers as $ans)
                                <div class="row cells11">
                                    <div class="cell offset1 colspan9">
                                        <label class="input-control radio">
                                            <input type="radio" name="answer" value="{{$loop->index}}">
                                            <span class="check"></span>
                                            <span class="caption">{{$ans}}</span>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                <div class="row cells7">
                                    <div class="cell offset5 colspan2">
                                        <input type="submit" onclick="$('#div_q_{{$entry->id}}').fadeOut(300, function () {
                                            $(this).remove();
                                            });" value="Send Answer"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        {{ $questions->links() }}
    </div>
</div>
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
    $('.infinite-scroll').jscroll({
    autoTrigger: true,
            loadingHtml: '<span class="mif-ani-spin mif-cross"></span>',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
            $('ul.pagination').remove();
            }
    });
    });
</script>
@endsection