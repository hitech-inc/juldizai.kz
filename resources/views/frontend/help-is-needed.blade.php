@extends('frontend.layouts.master')

@section('content')
<style>
	@if($currentURL == !null)
	  a.pjr{
	  	background-color: #b0e0c8;
	  }
  	@endif
</style>
<div class="container">
	<h1>Перечень документов</h1>
</div>
@endsection