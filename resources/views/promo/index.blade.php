@extends('layouts.dashboard')
@section('page_heading','Cars index')
@section('section')
     <a href="{{ url ('/promos/create') }}">Create</a>      
  	@section ('cotable_panel_title','Promo')
		@section ('cotable_panel_body')
		
			<table class="table table-bordered">
				<thead>
					<tr>
						
						<th>name</th>
						<th>promo_description</th>
						<th>start_date</th>
						<th>end_date</th>
						<th>percent</th>
						

					</tr>
				</thead>
				<tbody>
					@foreach ($promos as $promo)
					<tr>
						<td>{{$promo->get('name')}}</td>
						<td>{{$promo->get('promo_description')}}</td>
						<td>{{$promo->get('start_date')->format('Y-m-d H:i:s')}}</td>
						<td>{{$promo->get('end_date')->format('Y-m-d H:i:s')}}</td>
						<td>{{$promo->get('percent')}}</td>
						<td>
						
						
						    <a href="{{ url ('/promos/edit/'.$promo->getObjectId()) }}"> Edit</a>
						    <a href="{{ url ('/promos/delete/'.$promo->getObjectId()) }}"> Delete</a>
							
							
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
			
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))      
            
@stop
