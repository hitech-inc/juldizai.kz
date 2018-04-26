@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mass Media About Us
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($massMediaAboutUs, ['route' => ['massMediaAboutuses.update', $massMediaAboutUs->id], 'method' => 'patch']) !!}

                        @include('backend.mass_media_aboutuses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection