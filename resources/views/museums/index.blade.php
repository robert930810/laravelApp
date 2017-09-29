@extends('layouts.app')

@section("content")
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			
				@foreach($museums as $museum)
					<div class="alert alert-info">
						<a href="{{ route('museums.show',$museum->id)}}">{{$museum->name}}</a>
					</div>
				@endforeach				
			</div>
		</div>
	</div>
@endsection