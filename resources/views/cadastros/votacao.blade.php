@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Votação</div>

                <div class="card-body">
                    <form>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Título">
                            <label for="floatingInput">Título</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Descrição">
                            <label for="floatingInput">Descrição</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" placeholder="Data de inicio">
                            <label for="floatingInput">Data de inicio</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" placeholder="Data de fim">
                            <label for="floatingInput">Data de fim</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" min="0" max="1" placeholder="Pública">
                            <label for="floatingInput">Pública</label>
                        </div>

                        <div class="input-group">
                            <input type="file" class="form-control">
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
