@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <a href="{{ route('students.index') }}">
                    <img src="https://27mi124bz6zg1hqy6n192jkb-wpengine.netdna-ssl.com/wp-content/uploads/2020/05/10-Teaching-Strategies-to-Help-Students-Listen-scaled.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text"> Students </h1>
                    </div>
                </a>

            </div>

        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <a href="{{ route('courses.index') }}">
                    <img src="http://www.studentambassador.co.uk/wp-content/uploads/2019/12/our-courses.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text"> Courses </h1>
                    </div>
                </a>

            </div>

        </div>

{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@endsection
