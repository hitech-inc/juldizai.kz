@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            All New
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($allNew, ['route' => ['allNews.update', $allNew->id], 'method' => 'patch']) !!}

                        @include('backend.all_news.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection