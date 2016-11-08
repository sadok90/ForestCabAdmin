@extends('layouts.dashboard')
@section('page_heading','Option edit')
@section('section')
           
   <form role="form" method="get" action="/options/update">
            <input type="hidden" name="id" value="{{$option->getObjectId()}}">
            <div class="form-group input-group">
                <span class="input-group-addon">name</span>
                <input type="text" name="name" class="form-control" placeholder="" value="{{$option->get('name')}}">
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">Option description</span>
                <input type="text" name="option_description" class="form-control" placeholder="" value="{{$option->get('option_description')}}">
            </div>
            <div class="form-group input-group">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
            
        </form>        
           
@stop