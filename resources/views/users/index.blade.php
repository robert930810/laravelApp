@extends('layouts.app')

@section("content")
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			
				@foreach($users as $user)
					<div class="alert alert-info">
						{{$user->name}}
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
@endsection