@extends("layouts.app")
@section("title")
    EMPLOYEES
@endsection
@section("content")
            @foreach ($employees as $emp)
                <div class="single_employee">
                    <h2> {{ $emp->name }} </h2>
                    <h2> {{ $emp->lastname }} </h2>
                    <p> {{ $emp->background }} </p>
                    <hr>
                </div>
            @endforeach
@endsection