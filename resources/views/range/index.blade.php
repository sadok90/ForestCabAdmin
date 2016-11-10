@extends('layouts.dashboard')
@section('page_heading',trans('forestCab.Promos'))
@section('section')
     <a href="{{ url ('/ranges/create') }}">{{trans('forestCab.Create')}}</a>      
  	@section ('cotable_panel_title',trans('forestCab.Range'))
		@section ('cotable_panel_body')
		
			<table class="table table-bordered">
				<thead>
					<tr>
						
						<th>{{trans('forestCab.Name')}}</th>
						<th>{{trans('forestCab.Description')}}</th>
						<th>{{trans('forestCab.Price')}}</th>

					</tr>
				</thead>
				<tbody>
					@foreach ($ranges as $range)
					<tr>
						<td>{{$range->get('name')}}</td>
						<td>{{$range->get('range_description')}}</td>
						<td>{{$range->get('price')}}</td>
						<td>
						
						
						    <a href="{{ url ('/ranges/'.$range->getObjectId().'/edit') }}"> {{trans('forestCab.Update')}}</a>
						    <a href="{{ url ('/ranges/'.$range->getObjectId().'/delete') }}"> {{trans('forestCab.Delete')}}</a>
							<a href="{{ url ('/ranges/'.$range->getObjectId().'/show') }}"> {{trans('forestCab.Show')}}</a>
							
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))      
            
@stop
