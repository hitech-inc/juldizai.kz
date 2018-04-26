@extends('frontend.layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			@foreach( $galleries as $gallery )
			<div class="col-3">
				<a href="{{ url('galleries/' . $gallery->slug) }}" style="cursor: pointer;"><img src="/img/gallery/{{ $gallery->img }}" alt="" style="max-width: 100%"></a>
			</div>
			@endforeach
		</div>
	</div>
@endsection