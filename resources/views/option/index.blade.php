@extends('layouts.dashboard')
@section('page_heading','Option index')
@section('section')
     <a href="{{ url ('/options/create') }}">Create</a>      
  	@section ('cotable_panel_title','Option')
		@section ('cotable_panel_body')
		
			<table class="table table-bordered">
				<thead>
					<tr>
						
						<th>name</th>
						<th>option_description</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach ($options as $option)
					<tr>
						<td>{{$option->get('name')}}</td>
						<td>{{$option->get('option_description')}}</td>
						<td>
						
						    <a href="{{ url ('/options/edit/'.$option->getObjectId()) }}"> Edit</a>
						    <a href="{{ url ('/options/delete/'.$option->getObjectId()) }}"> Delete</a>
							
							
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))      
            
@stop
