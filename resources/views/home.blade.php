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
                            <img 
                                src="https://intelectua.com.br/sites/default/files/styles/large/public/76815-voce-realmente-sabe-o-que-e-desenvolvimento-web-entregar-em-2203.jpg?itok=XU9FDXQJ" 
                                class="card-img-top" 
                                alt="Candidato"
                            >
                            <div class="card-body">
                                <h5 class="card-title">Cadastre candidato</h5>
                                <p class="card-text">Aqui você vai cadastrar os candidados que vão participar das votações.</p>
                                <a href="/candidato" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; margin-right: 10px;">
                            <img 
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZbF0AbfYsOlBc76phvjnPS29C-vto_o3mwKmmFSIdHWNzjG9uU0l8RRHnNGHDsQz7S4o&usqp=CAU"
                                class="card-img-top" 
                                alt="Votação">
                            <div class="card-body">
                                <h5 class="card-title">Cadastre votação</h5>
                                <p class="card-text">Aqui você vai criar a votação que vai ocorrer.</p>
                                <a href="/votacao" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img 
                                src="https://149504724.v2.pressablecdn.com/wp-content/uploads/2017/08/websites.jpg" 
                                class="card-img-top" 
                                alt="Categoria">
                            <div class="card-body">
                                <h5 class="card-title">Cadastre categoria</h5>
                                <p class="card-text">Aqui você vai criar as categorias que vão compor as votações.</p>
                                <a href="/categoria" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                    <h6>Votações abertas:</h6>
                    
                    @foreach ($votacaoPublica as $votacao)
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('votacao.publica', ['hash' => $votacao->codigo]) }}">
                                    {{ $votacao->titulo }}
                                </a>
                            </li>
                        </ul>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
