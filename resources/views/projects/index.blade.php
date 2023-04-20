@extends('layouts.app')

@section('content')
    <div class="container py-5">
      <div class="d-flex align-items-center">
        <h1 class="me-auto">Tutti i Progetti</h1>

        <div>
          <a class="btn btn-sm btn-primary" href="{{ route('projects.create') }}">Nuovo project</a>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table table-striped table-inverse table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Slug</th>
            <th>Cliente</th>
            <th>Decrizione</th>
            <th>Url</th>
            <th>Data creazione</th>
            <th>Data modifica</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($projects as $project)
              <tr>
                <td>{{ $project->id }}</td>
                <td>
                  <a href="{{ route('projects.show',$project) }}">{{ $project->title }}</a>
                </td>
                <td>{{ $project->slug }}</td>
                <td>{{ $project->client }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->url }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
                <td>
                  <div class="d-flex ">
                    <a class="btn btn-sm btn-secondary" href="{{ route('projects.edit',$project) }}">Edit</a>
                  </div>
                </td>
              </tr>
          @empty
            <tr>
              <th colspan="6">Nessun progetto trovato</th>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
@endsection