@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('projects.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <div class="mb-3">
            <label for="client" class="form-label">client</label>
            <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" value="{{ old('client')}}">
            @error('client')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">url</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror " id="url" name="url" value="{{ old('url') }}">
            @error('url')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" >{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
    
@endsection