@extends('layouts.app')

@section("page-title", "Comics")

@section("main-content")
<main>
    <div class="container">
        <div class="row">
            @forelse ($comics as $comic)
            <div class="col-4">
                <div class="card">
                    {{$comic["title"]}}
                </div>

            </div>

            @empty

            @endforelse
        </div>
    </div>
</main>
@endsection

