@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="d-flex justify-content-center my-5">
    <div class="card m-3 px-0" style="width: 70%;">
        <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="{{ $project->title}}">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text"> {{$project->description }}</p>
            <a href="{{ $project->link_project}}" class="btn btn-primary me-2">Vedi in GitHub</a>
            <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Indietro</a>
        </div>
    </div>
</div>
@endsection