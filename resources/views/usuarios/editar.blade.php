@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')

    <h1 class="mt-4">Cambiar contraseña</h1>
    <hr>

    @if (session()->has('alerta'))
        <div class="alert alert-danger" role="alert"> {{ session('alerta') }}</div>
    @endif

    <form action="{{ route('editar') }}" method="post">
        @csrf

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contraseña actual</label>
                        <input type="password" class="form-control" name="contrase_a_vieja" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contraseña nueva</label>
                        <input type="password" class="form-control" name="contrase_a_nueva" required>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>

@endsection
