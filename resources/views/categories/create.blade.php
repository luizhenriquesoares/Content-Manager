@extends('template')

@section('content')

    <section class="content-header">
        <h1>
            Adicionar Categoria
        </h1>
        <ol class="breadcrumb">
            <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="form-group">
            {!! Form::open(['url' => 'categories/store']) !!}

            {!! Form::label('title', 'Titulo:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('call', 'Chamada:') !!}
            {!! Form::text('call', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo', 'Fotos:') !!}
            {!! Form::file('image') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}

    </section>

@endsection
