@extends('plantilla')
@section('Content')
<title>Index</title>
<h1 class="display-4 text-center">Por favor, ingresa tu matricula</h1>

<div class="container w-25 border p-4 mt-5">
    <form>
        <div class="mb-4">
            <label for="InputMatricula" class="form-label">Matricula:</label>
            <input type="Text" class="form-control" id="matricula">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection
