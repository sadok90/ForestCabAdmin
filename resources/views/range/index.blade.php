@extends('layouts.dashboard')
@section('page_heading','Ranges index')
@section('section')
     <a href="{{ url ('/ranges/create') }}">Create</a>      
  	@section ('cotable_panel_title','ranges')
		@section ('cotable_panel_body')
		
			<table class="table table-bordered">
				<thead>
					<tr>
						
						<th>name</th>
						<th>range_description</th>
						<th>price</th>

					</tr>
				</thead>
				<tbody>
					@foreach ($ranges as $range)
					<tr>
						<td>{{$range->get('name')}}</td>
						<td>{{$range->get('range_description')}}</td>
						<td>{{$range->get('price')}}</td>
						<td>
						
						
						    <a href="{{ url ('/ranges/edit/'.$range->getObjectId()) }}"> Edit</a>
						    <a href="{{ url ('/ranges/delete/'.$range->getObjectId()) }}"> Delete</a>
							<a href="{{ url ('/ranges/show/'.$range->getObjectId()) }}"> show</a>
							
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))      
            
@stop
