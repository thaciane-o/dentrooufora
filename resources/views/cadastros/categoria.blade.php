@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Categoria</div>

                <div class="card-body">
                    <form class="mt-3" method="POST">
                    @csrf
                    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do categoria">
                            <label for="floatingInput">Nome da categoria</label>
                            @error('nome') <p style="color: red;">{{ $message }}</p> @enderror
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
