@extends('layouts.app')

@section('content')
    {{-- movies container --}}
    <section id="movies">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 gy-3">

                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="movie card bg-dark">
                            <div class="card-body">
                                {{-- title --}}
                                <h4 class="card-title text-center border-bottom">{{ $movie->title }}</h4>
                                {{-- original title --}}
                                <div class="original-title mb-2 text-white"><strong>Titolo
                                        originale: </strong>{{ $movie->original_title }}
                                </div>
                                {{-- vote --}}
                                <div class="vote mb-2 text-white"><strong>Voto: </strong>{{ $movie->vote }}
                                </div>
                                {{-- nationality --}}
                                <div class="nationality mb-2 text-white"><strong>Nazionalità:
                                    </strong>{{ $movie->nationality }}
                                </div>
                                {{-- date --}}
                                <div class="date mb-2 text-white"><strong>Data: </strong>{{ $movie->date }}
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
