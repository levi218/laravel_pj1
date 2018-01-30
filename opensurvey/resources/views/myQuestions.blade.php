@extends('layouts.app')

@section('content')

<div class='grid'>
    @if(count($questions)>0)
    @foreach ($questions as $question)
    <div id = "div_q_{{$question['id']}}" class = "row cells7">
        <div class="cell colspan5 offset1">
            <div class="panel" data-role="panel">
                <div class="heading" style="height:95px;">
                    <span class="icon mif-question"></span>

                    <div class="title" style="display:block; margin:0px; padding-left:58px; padding-right:30px;">{{$question['question']}}</div>
                    <div style="display:block; padding-left:58px; margin:0px; padding-top:5px;" class="title minor-header">#tag1 #tag2 #tag3></div>
                </div>

                <div class="content" style="padding: 10px 0px 10px 0px">
                    <canvas id="chart_{{$question['id']}}" width="200" height="<?= count($question['ans']) * 15 ?>"></canvas>
                    <script>
                        var ctx = document.getElementById("chart_<?= $question['id'] ?>").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'horizontalBar',
                            data: {
                                labels: <?= $question['possibleAnswer'] ?>,
                                datasets: [{
                                        label: '# of Votes',
                                        data: <?= json_encode($question['ans']) ?>,
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
                </div>
            </div>
        </div>
    </div>

    @endforeach
    @else
    <div class="align-center">You havent asked any question, try it!</div>
    @endif
</div>
@endsection

