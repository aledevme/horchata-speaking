@csrf
<label for="">
    Titulo del proyecto
    <input type="text" name="title" value="{{ old('title', $project->title) }}" ><br>
</label>
<br>
<label for="">
    URL del proyecto
    <input type="text" name="url" value="{{ old('uel', $project->url) }}"><br>
</label>
<br>
<label for="">
    Descripción del proyecto
    <textarea name="description">{{ old('description',$project->description) }}</textarea><br>
</label>
<br>
<button>{{ $btnText }}</button>