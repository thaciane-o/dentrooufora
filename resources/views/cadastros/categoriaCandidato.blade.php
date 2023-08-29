@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Candidatos e categorias</div>

                <div class="card-body">
                    <form action="{{ route('categoriaCandidato.store') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                        <div class="mb-3">
                            <label for="candidato_id">Categorias:</label>
                                @foreach ($categorias as $categoria)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="categoria_id[]" value="{{ $categoria->id }}" id="categoria_{{ $categoria->id }}">
                                        <label class="form-check-label" for="categoria_{{ $categoria->id }}">{{ $categoria->nome }}</label>
                                    </div>
                                @endforeach
                            @error('categoria_id') <p style="color: red;">{{ $message }}</p> @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="candidato_id" id="candidato_id">
                                @foreach ($candidatos as $candidato)
                                    <option value="{{ $candidato->id }}">{{ $candidato->nome }}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Candidato</label
                        </div>

                        <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Enviar</button>
                        <a href="/home" class="btn btn-primary"  style="margin-top: 10px;">Voltar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection