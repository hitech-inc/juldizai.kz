@extends('frontend.layouts.master')

@section('content')
<style>
	@if($currentURL == !null)
            a.massMedia{
                background-color: #b0e0c8;
            }
        @endif
</style>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 style="text-align: center;">СМИ о нас</h2>
					@foreach( $massMedia as $mass )
					<div class="topBlock" style="text-align: center;">
						@if ( $loop->index == 0 )
						<img src="/img/{{ $mass->img }}" alt="">
						<p><a href="{{ $mass->link }}" style="cursor: pointer;">{{ $mass->title }}</a></p>
						@else
						<p><a href="{{ $mass->link }}" style="cursor: pointer;">{{ $mass->title }}</a></p>
						@endif
					</div>
					@endforeach
			</div>
		</div>
	</div>
@endsection