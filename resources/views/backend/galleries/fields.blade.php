<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-3">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::file('img') !!}
</div>
<!-- <div class="clearfix"></div> -->

<!-- Slug Field -->
<div class="form-group col-sm-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Photos Field -->
<div class="form-group col-sm-9">
    {!! Form::label('photos', 'Photos:') !!}
    {!! Form::textarea('photos', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('galleries.index') !!}" class="btn btn-default">Cancel</a>
</div>
