@extends('app')
@section('content')
    <div class="container">
        <div class="content-wrapper">
            <div class="">
                <div class="code-outer">
                    <h2>Put Your Code Below</h2>
                    @include('Partials._ide')
                </div>
                <div class="output-outer">
                    <h2>Output</h2>
                    {{--@include('Partials._output')--}}
                </div>
            </div>
        </div>
    </div>
@endsection