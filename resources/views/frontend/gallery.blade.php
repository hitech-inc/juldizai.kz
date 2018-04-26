@extends('frontend.layouts.master')

@section('content')
	<style>
		img{
			max-width: 100%;
			border-radius: 15px;
		}
		p{
			float: left;
			width: 33%;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a>{!! $gallery->photos !!}</a>
			</div>
		</div>
	</div>
@endsection