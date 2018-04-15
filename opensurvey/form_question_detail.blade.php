
<form action="{{ route('questions.answer') }}" method="post">
    {{ csrf_field() }}
    <p class="question">{{$quest->question}}</p>
    <input type="hidden" name="qId" id="qId" value=""/>
    <div class="answers">
        @if($quest->dec_answers!=null)
        @foreach($quest->dec_answers as $ans)
        <div class='form-check'>
            <input class='form-check-input' type='radio' name='answer' value='"+index+"' id='ans{{$loop->index}}' {{$loop->index==0?"checked":""}}\>
            <label class='form-check-label' for='ans{{$loop->index}}'>{{$ans}}</label>
        </div>
        @endforeach
        @else
        <div class='form-group'>
            <label for='answer'>Your answer</label>
            <input type='text' id='answer' name='answer' class='form-control'/>
        </div>
        @endif
    </div>
    <input class="btn btn-primary" type="submit" onclick="$('body').toggleClass('hide-overlay',true);" value="Send Answer"/>
      
</form>
@if($quest->dec_answers===null)
    @foreach($others_answers as $ans)
    <p>{{$ans->answer}}</p>
    @endforeach
@else
    @foreach($percentage as $ans)
    <p>{{$ans->answer}}     ===========     {{$ans->count}}</p>
    @endforeach
    <?= json_encode(array_map(function($o) { return $o->answer; }, $percentage)) ?>
    <?= json_encode(array_map(function($o) { return $o->count; }, $percentage)) ?>
    <canvas id="chart_{{$quest->id}}" width="900" height="<?= count($percentage) * 150 ?>"></canvas>
    <script>
        var ctx = document.getElementById("chart_{{$quest->id}}").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: <?= json_encode(array_map(function($o) { return $o->answer; }, $percentage)) ?>,
                datasets: [{
                        label: '# of Votes',
                        data: <?= json_encode(array_map(function($o) { return $o->count; }, $percentage)) ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
            },
            options: {
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                },
                gridLines: {
                    offsetGridLines: true
                }
            }
        });
    </script>
    
@endif