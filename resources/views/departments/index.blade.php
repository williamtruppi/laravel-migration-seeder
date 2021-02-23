@extends("layouts.app")
@section("title")
    Departments
@endsection
@section("content")
            @foreach ($departments as $dep)
                <div class="single_department">
                    <h2> {{ $dep->name }} </h2>
                    <p> {{ $dep->description }} </p>
                    <hr>
                </div>
            @endforeach
@endsection