<h1>Register form</h1>

{!! Form::open(['url'=>'/auth/register', 'class'=>'form-horizontal', 'role'=>'form']) !!}
    {!! Form::text('login', old('login'), ['placeholder' => 'Login']) !!}

{!! Form::email('email', old('email'), ['placeholder' => 'Email', 'class' => 'input  autofocus_default']) !!}

{!! Form::password('password', ['placeholder' => 'Password', 'class'=>'input']) !!}

    {!! Form::password('password_confirmation', ['placeholder' => 'Repeat password']) !!}

    {!! Form::submit('Submit') !!}
{!! Form::close() !!}