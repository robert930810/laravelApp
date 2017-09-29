@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::open(['route' => 'museums.store']) !!}
			<div class="form-group{{$errors->has('name') ? 'has-error' : '' }}">	    
				{{Form::label('name','Name')}}
				{{Form::text('name',null,['class'=>'form-control']) }}

				@if ($errors ->has('name'))
					<span class="help-block">
						
						@foreach ($errors->get('name') as $message)

							<strong>{{$message}}</strong>

						@endforeach

					</span>
				@endif

			</div>
			<div class="form-group{{$errors->has('description') ? 'has-error' : '' }}">
			{{Form::label('description','Description')}}
			{{Form::textarea('description',null,['class'=>'form-control']) }}

			@if($errors ->has('description'))
					<span class="help-block">
						
						@foreach ($errors->get('description') as $message)

							<strong>{{$message}}</strong>

						@endforeach

					</span>
			@endif

			</div>
			<div>
				{{Form::submit('Ingresar',['class'=>'btn btn-primary']) }}
			</div>
		{!! Form::close() !!}
	</div>

@endsection