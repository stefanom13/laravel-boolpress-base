@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="pb-2">Crea  Post</h2>
        <form action="{{ route('admin.post.store') }}" method="POST">
            @csrf

            {{-- parte titolo --}}
            <div class="form-group">
                <label for="title">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" aria-describedby="emailHelp">
                @error('title')
                    <div class="invalid-feedback">{{ 'errore titolo' }}</div>
                @enderror
            </div>
             {{-- info contenuto articoli --}}
            <div class="form-group">
                <label for="content">Contenuto Articolo*</label>
                <textarea class="form-control  @error('content') is-invalid @enderror" id="content" name="content"
                    rows="3">{{ old('content') }}</textarea>
                @error('title')
                    <div class="invalid-feedback">{{ 'Errore nel inserimento articolo' }}</div>
                @enderror
                {{-- <input type="password" class="form-control" id="exampleInputPassword1"> --}}
            </div>

            {{-- info dati pubblicazione --}}
            <div class="form-group">
                <label for="published_at">Data di Pubblicazione</label>
                <input type="date" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at"
                    value="{{ old('published_at') }}" aria-describedby="emailHelp">
                @error('title')
                    <div class="invalid-feedback">{{ 'errore' }}</div>
                @enderror
            </div>

            {{-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}

            <button type="submit" class="btn btn-primary">Crea!</button>
        </form>
    </div>
@endsection
