@extends ('layouts.app')

@section('content')

	<div class="container">
		

		<div class="panel panel-heading">
			<h4 class="text-primary text-center">{{ $museum->name }}</h4>
		</div>
		
		<div class="panel panel-body">			
			<h3 class="text-center text-info">{{ $museum->description}}</h3>	
		</div>

				
	</div>

@endsection