@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Codes By Users</h2></div>
        <div class="panel-body">
            @foreach($codes as $code)
                <div class="well well-lg">{!! $code->code !!}</div>
            @endforeach
        </div>
    </div>
@endsection