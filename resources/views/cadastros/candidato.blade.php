@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Candidato</div>

                <div class="card-body">
                    <form action="{{ route('candidato.store') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do candidato">
                            <label for="floatingInput">Nome do candidato</label>
                        </div>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="foto" id="foto">
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
