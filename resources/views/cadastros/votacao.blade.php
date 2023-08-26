@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Votação</div>

                <div class="card-body">
                    <form action="{{ route('votacao.create') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                    @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
                            <label for="floatingInput">Título</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="categoria_id" id="categoria_id">
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Categoria</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
                            <label for="floatingInput">Descrição</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="datahora_inicio" id="datahora_inicio" placeholder="Data de inicio">
                            <label for="floatingInput">Data de inicio</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="datahora_fim" id="datahora_fim" placeholder="Data de fim">
                            <label for="floatingInput">Data de fim</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" min="0" max="1" name="publica" id="publica" placeholder="Pública">
                            <label for="floatingInput">Pública</label>
                        </div>

                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_capa" id="foto_capa" accept="image/*"/>
                        </div>

                        <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Enviar</button>
                        <a href="/home" class="btn btn-primary" style="margin-top: 10px;">Voltar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
