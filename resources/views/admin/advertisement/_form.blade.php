<div class="form-group">
    {!! Form::label('tag_name', 'Имя тега', ["class"=>"col-sm-3 control-label"]) !!}
    <div class="col-sm-6">
        {!! Form::text('tag_name', old('title'), ["class"=>"form-control",
        "placeholder"=>"Имя тега",'required' => 'required',
        "type"=>"email" ]) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::button('<i class="fa fa-btn fa-save"></i> Сохранить', ['type'=>'submit',
        'class' =>
        'buton b_red buton-3 buton-mini ']) !!}

    </div>
</div>