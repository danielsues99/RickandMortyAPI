@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menú de Administración') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido al módulo de administración') }}
                </div>
            </div>
        </div>
        @foreach($characters as $characters)
        <div class="col-md-6">
            <ul class="list-group mt-2 mb-4">
                <li class="list-group-item active">{{($characters->name) }}</li>
                <li class="list-group-item">Estado: {{($characters->status) }}</li>
                <li class="list-group-item">Especie: {{($characters->species) }}</li>
                <li class="list-group-item">Tipo: {{($characters->type) }}</li>
                <li class="list-group-item">Género: {{($characters->gender) }}</li>
                <li class="list-group-item">Origen: {{($characters->origin) }}</li>
                <li class="list-group-item">Ubicación: {{($characters->location) }}</li>
                <li class="list-group-item">Imagen: {{($characters->image) }}</li>
                <li class="list-group-item">Episodio: {{($characters->episode) }}</li>
                <li class="list-group-item">URL: {{($characters->url) }}</li>
                <li class="list-group-item">Fecha creación: {{($characters->created_at) }}</li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
