<!-- Tel Field -->
<div class="form-group col-sm-4">
    {!! Form::label('Tel', 'Городской номер телефона:') !!}
    {!! Form::text('Tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-4">
    {!! Form::label('mobile', 'Мобильный номер телефона:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Адрес:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Maps coords Field -->
<h3 style="text-align: center;">Координаты для карты</h3>
<div class="form-group col-sm-3">
    {!! Form::label('longitude', 'Долгота:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-3">
    {!! Form::label('latitude', 'Широта:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contacts.index') !!}" class="btn btn-default">Cancel</a>
</div>
