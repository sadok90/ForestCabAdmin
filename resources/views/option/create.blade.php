@extends('layouts.dashboard')
@section('page_heading','Option create')
@section('section')
           
   <form role="form" method="get" action="/options/store">
        
            <div class="form-group input-group">
                <span class="input-group-addon">Name</span>
                <input type="text" name="name" class="form-control" placeholder="" >
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Option description</span>
                <input type="text" name="option_description" class="form-control" placeholder="">
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-default">Create</button>
            </div>
            
        </form>        
           
@stop