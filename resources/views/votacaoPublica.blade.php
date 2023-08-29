@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $votacao->titulo }}</div>
            
                @if($votacao->foto_capa && file_exists(public_path('uploads/' . $votacao->foto_capa)))
                    <img 
                        src="{{ asset('uploads/' . $votacao->foto_capa) }}"
                        alt="Capa"
                        style="width: 100%; height: 300px;"
                    >
                @else
                    <img 
                        src="{{ $votacao->foto_capa }}"
                        alt="Capa"
                        style="width: 100%; height: 300px;"
                    >
                @endif

                <div class="card-body">
                    <p style="text-align: center;">{{ $votacao->descricao }}</p>

                    <div class="d-flex justify-content-center align-items-center">
                        @foreach ($candidatos as $candidato)
                            <div class="card m-2" style="width: 18rem;">
                                <img 
                                    src="{{ asset('uploads/' . $candidato->foto) }}"
                                    class="card-img-top" 
                                    alt="Candidato"
                                >
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $candidato->nome }}</h5>
                                </div>
                                <button class="btn btn-primary" style="margin-top: 10px;">Votar</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
