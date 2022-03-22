@extends('plantilla')
@section('Content')
<title>Login</title>
<div class="container w-25 border p-4 mt-5">
<form>
    <div class="mb-3">
        <label for="Usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="txtUsuario">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="txtPassword">
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>

@endsection
