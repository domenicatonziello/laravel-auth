@extends('layouts.app')

@section('title', 'Progetti')

@section ('content')
    <div class="d-flex justify-content-between align-items-center my-5">
        <h1 class="">Progetti</h1>
        <a href="{{route('admin.projects.create')}}" class="btn btn-warning">Aggiungi</a>
    </div>
    <div class="row">
        @forelse ($projects as $project)
            <div class="card m-3 px-0" style="width: 18rem;">
                <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="{{ $project->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text"> {{$project->description }}</p>
                    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">Dettagli</a>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        @empty
            <h2>Non ci sono progetti</h2>
        @endforelse
    </div>
@endsection