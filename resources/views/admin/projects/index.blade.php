@extends('layouts.app')

@section('title', 'Progetti')

@section ('content')
    <h1 class="my-5">Progetti</h1>
    <div class="row">
        @forelse ($projects as $project)
            <div class="card m-3 px-0" style="width: 18rem;">
                <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="{{ $project->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text"> {{$project->description }}</p>
                    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @empty
            <h2>Non ci sono progetti</h2>
        @endforelse
    </div>
@endsection