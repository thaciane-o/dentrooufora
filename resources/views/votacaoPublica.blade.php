@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $votacao->titulo }}</div>
                <div class="card-header">
                    <img 
                        src="{{ asset('uploads/' . $votacao->foto_capa) }}"
                        alt="Capa"
                        style="width: 100%;"
                    >
                </div>
                <div class="card-body">
                    <p>Clique no link abaixo para acessar esta votação:</p>
                    <a href="{{ route('votacao.publica', ['hash' => $hash]) }}">{{ route('votacao.publica', ['hash' => $hash]) }}</a>

                    <p style="text-align: center; ">{{ $votacao->descricao }}</p>

                    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
                        @foreach ($candidatos as $candidato)
                            <div class="card" style="width: 18rem; margin-right: 10px;">
                                <img 
                                    src="{{ asset('uploads/' . $candidato->foto) }}"
                                    class="card-img-top" 
                                    alt="Candidato"
                                >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $candidato->nome}}</h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


                    <!-- <p>Códiga da votação: {{ $hash }}</p>
                    <div style="display: flex; flex-direction: row; align-items: center;">

                    @foreach ($candidatos as $candidato)
                        <div class="card" style="width: 18rem; margin-right: 10px;">
                            <img 
                                src="{{ $candidato->foto }}"
                                class="card-img-top" 
                                alt="Candidato"
                            >
                            <div class="card-body">
                                <h5 class="card-title">{{ $candidato->nome}}</h5>
                            </div>

                    </div>
                    @endforeach -->
