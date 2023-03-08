<hr>
@if($project->exists)
    <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
    @method('PUT')
@else
    <form action="{{route('admin.projects.store')}}" method="POST">
@endif
    @csrf
    <div class="row my-5">
        {{-- title --}}
        <div class="col-6 mb-4">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" maxlength="50" required value="{{$project->title}}" placeholder="Inserisci il titolo del tuo progetto">
        </div>
        {{-- image --}}
        <div class="col-6 mb-4">
            <label for="image" class="form-label">Immagine</label>
            <input type="url" class="form-control" id="image" name="image" value="{{$project->image}}" placeholder="Inserisci URL dell'immagine">
        </div>
        {{-- description --}}
        <div class="col-8 mb-4">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"> {{$project->description}}</textarea>
        </div>
        {{-- link_project --}}
        <div class="col-4 mb-4">
            <label for="link" class="form-label">Link Progetto</label>
            <input type="text" class="form-control" id="link" name="link_project" required  value="{{$project->link_project}}" placeholder="Inserisci link del progetto">
        </div>
    </div>
    <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Indietro</a>
    <button type="submit" class="btn btn-primary">Salva</button>
</form>
<hr>