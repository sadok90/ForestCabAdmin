@extends('layouts.dashboard')
@section('page_heading','Car create')
@section('section')
           
   <form role="form" method="get" action="/cars/store">
        
            <div class="form-group input-group">
                <span class="input-group-addon">Model</span>
                <input type="text" name="model" class="form-control" placeholder="" >
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Car description</span>
                <input type="text" name="car_description" class="form-control" placeholder="">
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-default">Create</button>
            </div>
            
        </form>        
           
@stop