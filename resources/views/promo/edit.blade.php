@extends('layouts.dashboard')
@section('page_heading','Promo edit')
@section('section')
           
   <form role="form" method="get" action="/promos/update">
            <input type="hidden" name="id" value="{{$promo->getObjectId()}}">
            <div class="form-group input-group">
                <span class="input-group-addon">name</span>
                <input type="text" name="name" class="form-control" placeholder="" value="{{$promo->get('name')}}">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">promo description</span>
                <input type="text" name="promo_description" class="form-control" placeholder="" value="{{$promo->get('promo_description')}}">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Start date</span>
                <input type="date" name="start_date" class="form-control" placeholder="" value="{{$promo->get('start_date')->format('Y-m-d H:i:s')}}">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">End date</span>
                <input type="date" name="end_date" class="form-control" placeholder="" value="{{$promo->get('end_date')->format('Y-m-d H:i:s')}}">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Percent</span>
                <input type="text" name="percent" class="form-control" placeholder="" value="{{$promo->get('percent')}}">
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
            
        </form>        
           
@stop