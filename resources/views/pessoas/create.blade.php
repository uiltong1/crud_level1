@extends('layouts.layout')
@section('content')
<h4>Formulário de Cadastro</h4>
<form method="post" action="{{route('pessoas_save')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name" id="name" />
    </div>
    <div class="form-group">
        <label for="document_number">Documento:</label>
        <input type="text" class="form-control" name="document_number" id="document_number"/>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email"/>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection

    
