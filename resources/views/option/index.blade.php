@extends('layouts.dashboard')
@section('page_heading',trans('forestCab.Options'))
@section('section')
     <a href="{{ url ('/options/create') }}">{{trans('forestCab.Create')}}</a>      
  	@section ('cotable_panel_title',trans('forestCab.Option'))
		@section ('cotable_panel_body')
		
			<table class="table table-bordered">
				<thead>
					<tr>
						
						<th>{{trans('forestCab.Name')}}</th>
						<th>{{trans('forestCab.Description')}}</th>
						

					</tr>
				</thead>
				<tbody>
					@foreach ($options as $option)
					<tr>
						<td>{{$option->get('name')}}</td>
						<td>{{$option->get('option_description')}}</td>
						<td>
						
						
						    <a href="{{ url ('/options/'.$option->getObjectId().'/edit') }}"> {{trans('forestCab.Update')}}</a>
						    <a href="{{ url ('/options/'.$option->getObjectId().'/delete') }}"> {{trans('forestCab.Delete')}}</a>
							
							
						</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>	
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))      
            
@stop
