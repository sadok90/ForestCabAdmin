@extends('layouts.dashboard')
@section('page_heading','Cars index')
@section('section')
     <a href="{{ url ('/cars/create') }}">Create</a>      
  	@section ('cotable_panel_title','Cars')
		@section ('cotable_panel_body')
		
			<table class="table table-bordered">
				<thead>
					<tr>
						
						<th>model</th>
						<th>car_description</th>
						

					</tr>
				</thead>
				<tbody>
					@foreach ($cars as $car)
					<tr>
						<td>{{$car->get('model')}}</td>
						<td>{{$car->get('car_description')}}</td>
						<td>
						
						
						    <a href="{{ url ('/cars/edit/'.$car->getObjectId()) }}"> Edit</a>
						    <a href="{{ url ('/cars/delete/'.$car->getObjectId()) }}"> Delete</a>
							
							
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))      
            
@stop
