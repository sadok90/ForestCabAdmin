@extends('layouts.dashboard')
@section('page_heading','Cars index')

@section('section')


<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        
    </div>
</div>
 
@stop

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript"> 
    $(function () {
        
                $('#datetimepicker1').datetimepicker();

            });</script>
