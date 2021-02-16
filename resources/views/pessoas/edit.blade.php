@extends('layouts.layout')
@section('content')
<h4>Formulário de Cadastro</h4>
<form method="post" action="{{route('pessoas_update', $pessoa->id)}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$pessoa->name}}" />
    </div>
    <div class="form-group">
        <label for="document_number">Documento:</label>
        <input type="text" class="form-control" name="document_number" id="document_number" value="{{$pessoa->document_number}}"/>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$pessoa->email}}"/>
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
</form>
@endsection

    
