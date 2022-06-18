@extends('layouts.quiz')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Results of your test</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>

                                    <a href="{{ route('user.test',$result->topic_id) }}" class="btn btn-primary">Start test again</a>
                                </div>
                            </div>
                        </div>
                    @endif
                 
                    <p>Total points: {{ $result->total_points }} points</p>

                    @foreach ($question_results  as $res)
                <div class="card">
                <p>{{ $res->question->question_text}} </p>
              
                @if ($res->points == 0)
                <span class="bg-danger">" {{ $res->option->option_text}} "  -  is Incorrect</span>
                
                 @else 
                 <span class="bg-green">" {{ $res->option->option_text}} "  -  is correct</span> 
                @endif
                </div>

                    @endforeach

                    <a href="{{ route('user.test',$result->topic_id) }}" class="btn btn-primary">Start test again</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection