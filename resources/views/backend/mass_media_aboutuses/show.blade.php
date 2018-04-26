@extends('backend.backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mass Media About Us
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('backend.mass_media_aboutuses.show_fields')
                    <a href="{!! route('massMediaAboutuses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
