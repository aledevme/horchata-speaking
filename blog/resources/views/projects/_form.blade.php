<div class="form-group">
    <label for="title">
        Titulo del proyecto
    </label>
    <input type="text" class="form-control shadow-sm border-0" id="title" name="title" value="{{ old('title', $project->title) }}" >
</div>

<div class="form-group">
    <label for="url">
        URL del proyecto
    </label>
    <input type="text" class="form-control shadow-sm border-0" id="url" name="url" value="{{ old('uel', $project->url) }}"><br>
</div>

<div class="form-group">
    <label for="description">
        Descripción del proyecto
    </label>
    <textarea id="description" class="form-control shadow-sm border-0" name="description">{{ old('description',$project->description) }}</textarea><br>
</div>
<div class="row">
    <button class="btn btn-primary btn-lg mx-auto py-1">{{ $btnText }}</button>
</div>