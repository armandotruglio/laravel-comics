@extends('layouts.app')

@section("page-title", "Comics")

@section("main-content")
<main>
    <div class="container">
        <div class="row">
            @forelse ($comics as $comic)
            <div class="col-3">
                <div class="card">
                    <a href="{{ route("comics.show", $loop->index) }}">
                        <div class="card-image">
                            <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
                        </div>
                    </a>
                        <div class="card-body">
                            <p class="card-title fw-bold">{{ $comic["title"] }}</p>
                            <p class="card-text text-truncate">{{ $comic["description"] }}</p>
                        </div>
                </div>

            </div>

            @empty

            @endforelse
        </div>
    </div>
</main>
@endsection

