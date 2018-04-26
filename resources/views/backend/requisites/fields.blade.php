<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Загаловок:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Via Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_via', 'Оплата через:') !!}
    {!! Form::text('payment_via', null, ['class' => 'form-control']) !!}
</div>

<!-- Webmonney Field -->
<div class="form-group col-sm-6">
    {!! Form::label('webmonney', 'WebMonney:') !!}
    {!! Form::text('webmonney', null, ['class' => 'form-control']) !!}
</div>

<!-- Qiwi Wallet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qiwi_wallet', 'Qiwi Wallet:') !!}
    {!! Form::text('qiwi_wallet', null, ['class' => 'form-control']) !!}
</div>

<!-- Yandex Money Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yandex_money', 'Yandex деньги:') !!}
    {!! Form::text('yandex_money', null, ['class' => 'form-control']) !!}
</div>

<!-- Rnn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rnn', 'РНН:') !!}
    {!! Form::text('rnn', null, ['class' => 'form-control']) !!}
</div>

<!-- Расчетный счет Field -->
<div class="form-group col-sm-6">
    {!! Form::label('checking_account', 'Расчетный счет:') !!}
    {!! Form::text('checking_account', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank', 'Банк:') !!}
    {!! Form::text('bank', null, ['class' => 'form-control']) !!}
</div>

<!-- Mfo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mfo', 'МФО:') !!}
    {!! Form::text('mfo', null, ['class' => 'form-control']) !!}
</div>

<!-- Bin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bin', 'БИН:') !!}
    {!! Form::text('bin', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('requisites.index') !!}" class="btn btn-default">Cancel</a>
</div>
