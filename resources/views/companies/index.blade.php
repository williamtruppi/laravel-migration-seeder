@extends("layouts.app")
@section("title")
    Companies
@endsection
@section("content")
            @foreach ($companies as $comp)
                <div class="single_employee">
                    <h2> {{ $comp->name }} </h2>
                    <p> {{ $comp->description }} </p>
                    <h2> {{ $comp->address }} </h2>
                    <h2> {{ $comp->country }} </h2>
                    <hr>
                </div>
            @endforeach
@endsection