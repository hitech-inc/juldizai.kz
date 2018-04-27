@extends('frontend.layouts.master')

@section('content')
<style>
	@if($currentURL == !null)
            a.gallery{
                background-color: #b0e0c8;
            }
        @endif
	       
</style>
	<div class="container">
		<div class="row">
			@foreach( $galleries as $gallery )
			<div class="col-3" style="margin: 25px 10px;">
				<a href="{{ url('galleries/' . $gallery->slug) }}" style="cursor: pointer;" class="gal"><img src="/img/gallery/{{ $gallery->img }}" alt="" style="max-width: 100%"><span>{{ $gallery->title }}</span></a>
			</div>
			@endforeach
		</div>
	</div>
@endsection