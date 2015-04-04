
{!! Form::open(['url'=>'/auth/login', 'class'=>'form-horizontal', 'role'=>'form']) !!}
    {!! Form::text('email', old('email'), ['placeholder' => 'Email']) !!}

    {!! Form::password('password', ['placeholder' => 'Password']) !!}

    <label> Remember </label> {!! Form::checkbox('remember') !!}

    {!! Form::submit('Submit') !!}
{!! Form::close() !!}