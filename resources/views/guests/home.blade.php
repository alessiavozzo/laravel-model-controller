@extends('layouts.app')

@section('content')
    {{-- movies container --}}
    <section id="movies">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">

                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                {{-- title --}}
                                <h4 class="card-title">{{ $movie->title }}</h4>
                                {{-- original title --}}
                                <div class="original-title"><strong>Titolo originale:</strong>{{ $movie->original_title }}
                                </div>
                                {{-- vote --}}
                                <div class="vote"><strong>Voto:</strong>{{ $movie->vote }}
                                </div>
                                {{-- nationality --}}
                                <div class="nationality"><strong>Nazionalità:</strong>{{ $movie->nationality }}
                                </div>
                                {{-- date --}}
                                <div class="date"><strong>Data:</strong>{{ $movie->date }}
                                </div>
                            </div>
                        </div>

                    </div>
                @empty
                    <p>No movies</p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
