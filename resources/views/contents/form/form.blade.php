{!! Form::open() !!}

{!! Form::label('title', 'Titulo') !!}
{!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}

{!! Form::label('call', 'Chamada') !!}
{!! Form::text('call',   null, ['class' => 'form-control', 'required']) !!}

{!! Form::label('photo', 'Foto') !!}
{!! Form::input('photo', null, ['class' => 'form-control', 'required']) !!}

{!! Form::submit('Click Me!') !!}}
<hr>
{!! Form::close() !!}