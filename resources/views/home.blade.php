@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastros') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="display: flex; flex-direction: row;">
                        <div class="card" style="width: 18rem;  margin-right: 10px;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cadastre candidato</h5>
                                <p class="card-text">Aqui você vai cadastrar os candidados que vão participar das votações.</p>
                                <a href="/candidato" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; margin-right: 10px;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cadastre votação</h5>
                                <p class="card-text">Aqui você vai criar a votação que vai ocorrer.</p>
                                <a href="/votacao" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cadastre categoria</h5>
                                <p class="card-text">Aqui você vai criar as categorias que vão compor as votações.</p>
                                <a href="/categoria" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection