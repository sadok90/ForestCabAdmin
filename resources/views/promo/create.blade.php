@extends('layouts.dashboard')
@section('page_heading','Promo create')
@section('section')
           
   <form role="form" method="get" action="/promos/store">
        
            <div class="form-group input-group">
                <span class="input-group-addon">Name</span>
                <input type="text" name="name" class="form-control" placeholder="" >
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Promo description</span>
                <input type="text" name="promo_description" class="form-control" placeholder="">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Start date</span>
                <input type="date" name="start_date" class="form-control" placeholder="" >
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">End date</span>
                <input type="date" name="end_date" class="form-control" placeholder="" >
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Percent</span>
                <input type="text" name="percent" class="form-control" placeholder="" >
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-default">Create</button>
            </div>
            
        </form>        
           
@stop